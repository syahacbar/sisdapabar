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
        $this->load->view('admin/layout',$data);
    }

public function kategori($cat)
    {
        $data['title'] = "BERITA - ".$cat;
        $data['berita'] = $this->M_berita->get_all(NULL,$cat);
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/berita";
        $this->load->view('public/layout',$data);
    }

    public function detail($slug)
    {
        $data['title'] = "DETAIL BERITA";
        $data['detail'] = $this->M_berita->get_by_slug($slug);
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/detail_berita";
        $this->load->view('public/layout',$data);
    }
}