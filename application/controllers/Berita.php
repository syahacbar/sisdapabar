<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_berita']);
    }

    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = "BERITA";
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/berita";
        $this->load->view('public/layout', $data);
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

    //INI CUMA ALAT BANTU
    // public function create_slug()
    // {
    //     $query = $this->M_berita->get_all();
    //     foreach($query AS $q)
    //     {
    //         $lowcase = strtolower($q->judul);
    //         $slug = url_title($lowcase,'dash',true);
    //         $this->db->query("UPDATE berita SET slug='".$slug."' WHERE id='$q->id'");
    //     }
    // }

    public function ref_berita()
    {
        $this->load->model('M_berita');

        if ($this->uri->segment(3) == "") {
            $data['linkform'] = "berita/ref_berita/add";
            $data['berita'] = $this->M_berita->get_all();
        } else if ($this->uri->segment(3) == "add") {
            $data = array(
                'berita'  => $this->input->post('berita'),
            );

            $this->M_berita->add($data);

            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('berita/ref_berita');
        } else if ($this->uri->segment(3) == "edit") {
            $id = $this->input->post('id');
            $data = array(
                'berita'  => $this->input->post('berita')
            );
            $this->M_berita->edit($data, $id);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('berita/ref_berita');
        } else if ($this->uri->segment(3) == "delete") {
            $id = $this->input->post('id');
            $this->M_berita->delete($id);
            redirect('berita/ref_berita');
        }

        $data['_view'] = 'admin/berita';
        $this->load->view('admin/layout', $data);
    }
}
