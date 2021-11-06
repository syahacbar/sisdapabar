<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_berita']);
    }

    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = "GALERI";
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/galeri";
        $this->load->view('public/layout',$data);
    }
}