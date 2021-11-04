<?php defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_berita','M_pengaduan']);

    }    

    public function index()
    {
        $data['slider'] = $this->M_berita->get_slider();
        $data['pengaduan'] = $this->M_pengaduan->get_filter(NULL,NULL,'Diterima',NULL,NULL,3);
        $data['berita'] = $this->M_berita->get_all(3);
        $data['title'] = "BERANDA";
        $data['_view'] = "public/beranda";
        $this->load->view('public/layout',$data);
    }
}