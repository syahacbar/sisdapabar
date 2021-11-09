<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_berita']);
    }

    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = "BERITA";
        $data['list_kategori'] = $this->M_berita->get_kategori();

        $data['_view'] = "admin/berita";
        $this->load->view('admin/layout', $data);
    }

    public function kategori($cat)
    {
        $data['title'] = "BERITA - " . $cat;
        $data['berita'] = $this->M_berita->get_all(NULL, $cat);
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/berita";
        $this->load->view('public/layout', $data);
    }

    public function detail($slug)
    {
        $data['title'] = "DETAIL BERITA";
        $data['detail'] = $this->M_berita->get_by_slug($slug);
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/detail_berita";
        $this->load->view('public/layout', $data);
    }

    public function switchslider($sliderstatus)
    {
        $idberita = $this->input->post('idberita');
        //$sliderstatus = $this->input->post('sliderstatus');
        if ($this->M_berita->switchslider($idberita, $sliderstatus)) {
            echo json_encode(array('status' => TRUE));
        } else {
            echo json_encode(array('status' => FALSE));
        }

        //function json_encode ini untuk melempar ke console, agar di JS halaman html bisa mencetaknya di bagian ajax success
    }

    public function deleteberita()
    {
        $idberita = $this->input->post('idberita');
        if ($this->M_berita->deletedata($idberita)) {
            echo json_encode(array('status' => TRUE, 'info' => 'Berhasil hapus berita'));
        } else {
            echo json_encode(array('status' => FALSE, 'info' => 'Gagal hapus berita'));
        }
    }

    public function add()
    {
        $data['_view'] = "admin/berita_add";
        $this->load->view('admin/layout', $data);
    }

    public function edit($idberita)
    {
        $data['berita'] = $this->M_berita->get_by_id($idberita);
        $data['_view'] = "admin/berita_edit";
        $this->load->view('admin/layout', $data);
    }

    public function saveberita()
    {
        $slug =  url_title($this->input->post('judulberita'), 'dash', true);
        $params = array(
            'tanggal' => date("Y-m-d H:i:s"),
            'judul' => $this->input->post('judulberita'),
            'isi' => $this->input->post('isiberita'),
            'slug' => $slug,
            'kategori' => $this->input->post('kategoriberita'),
            'id' => $this->input->post('idberita'),
        );

        // $this->M_berita->add($params);
        $this->M_berita->add_berita($params);
        echo json_encode(array('status' => TRUE));
        redirect('auth/login', 'refresh');
    }

    public function uploadgbrberita()
    {
        $config['upload_path']   = FCPATH . '/upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_berita')) {
            $idberita = $this->input->post('idberita');
            $file_name = $this->upload->data('file_name');
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('galeriberita', array('idberita' => $idberita, 'nama_file' => $file_name, 'uploaded_on' => $uploaded_on));
        }
    }
}
