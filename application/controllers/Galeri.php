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
        $data['galeri_irigasi'] = $this->M_berita->get_by_cat('Irigasi');
        $data['galeri_sungai'] = $this->M_berita->get_by_cat('Sungai');
        $data['galeri_pantai'] = $this->M_berita->get_by_cat('Pantai');
        $data['title'] = "GALERI";
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/galeri";
        $this->load->view('public/layout', $data);
    }
}
