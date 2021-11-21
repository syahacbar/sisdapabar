<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
         if ( ! $this->session->userdata('username'))
        { 
            redirect('Auth');
        }
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model(['M_berita']);
    }



    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = "BERITA";
        $data['list_kategori'] = $this->M_berita->get_kategori();
        // $data['id_galeriberita'] = $this->M_berita->get_id_galeriberita();
        // $data['id'] = $this->generateidberita();

        $data['_view'] = "admin/berita";
        $this->load->view('admin/layout', $data);
    }

    public function generateidberita()
    {
        $last_idbr = $this->M_berita->get_lastrow();
        if ($last_idbr->num_rows > 0) {
            $idberita = (int)$last_idbr->row()->idberita + 1;
        } else {
            $idberita = 1;
        }
        return $idberita = $idberita;
        $idberita = $idberita;
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
        
        $data['idberita'] = date("YmdHis");
    }

    public function edit($idberita)
    {
        $data['berita'] = $this->M_berita->get_by_id($idberita);
        $data['_view'] = "admin/berita_edit";
        $this->load->view('admin/layout', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Silakan kembali ke halaman berita dengan menekan menu Berita yang ada di bagian sibebar halaman ini.</div>');
        echo json_encode(array('status' => TRUE));
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


        $this->M_berita->add_berita($params);

        $this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24"  height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          Silakan kembali ke halaman berita dengan menekan menu Berita yang ada di bagian sibebar halaman ini.
        </div>
      </div>');
        echo json_encode(array('status' => TRUE));
        // redirect('admin/berita_add', 'refresh');
        // redirect('admin/berita', 'refresh');


        // if ($this->db->affected_rows() > 0) {
        //     echo "<script>alert('Berita Berhasil Ditambahkan')</script>";
        // }
        // echo "<script>window.location='" . site_url('admin/berita') . "';</script>";
    }

    public function updateberita()
    {
        $slug =  url_title($this->input->post('judulberita'), 'dash', true);
        $id=$this->input->post('idberita');

        $params = array(
            'tanggal' => date("Y-m-d H:i:s"),
            'judul' => $this->input->post('judulberita'),
            'isi' => $this->input->post('isiberita'),
            'slug' => $slug,
            'kategori' => $this->input->post('kategoriberita'),
            'id' => $this->input->post('idberita'),
        );


        $this->M_berita->edit($params);

        $this->session->set_flashdata('message', '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24"  height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          Silakan kembali ke halaman berita dengan menekan menu Berita yang ada di bagian sibebar halaman ini.
        </div>
      </div>');
        echo json_encode(array('status' => TRUE));
        // redirect('admin/berita_add', 'refresh');
        // redirect('admin/berita', 'refresh');


        // if ($this->db->affected_rows() > 0) {
        //     echo "<script>alert('Berita Berhasil Ditambahkan')</script>";
        // }
        // echo "<script>window.location='" . site_url('admin/berita') . "';</script>";
    }


    public function uploadgbrberita()
    {
        $config['upload_path']   = FCPATH . '/upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_berita')) {
            $idberita = $this->input->post('idberita');
            $file_name = $this->upload->data('file_name');
            $slider = $this->input->post('slider');
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('galeriberita', array('idberita' => $idberita, 'nama_file' => $file_name, 'slider' => $slider, 'uploaded_on' => $uploaded_on));
        }
    }
}
