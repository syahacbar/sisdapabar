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
        $data['pengaduan'] = $this->M_pengaduan->get_filter(NULL,NULL,'Diterima',NULL,NULL);
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = "BERANDA";
        $data['_view'] = "public/beranda";
        $this->load->view('public/layout',$data);
    }
}