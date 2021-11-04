<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_wilayah','M_pengaduan','M_berita']);
    } 

    public function index()
    {
        $data['count_irigasi'] = $this->M_pengaduan->count_by_infra('Irigasi')->num_rows();
        $data['count_sungai'] = $this->M_pengaduan->count_by_infra('Sungai')->num_rows();
        $data['count_pantai'] = $this->M_pengaduan->count_by_infra('Pantai')->num_rows();
        $data['list_infra'] = $this->M_pengaduan->get_infra();
        $data['list_month'] = $this->M_pengaduan->get_month('3');
        $data['count_kab'] = $this->M_pengaduan->count_by_kab();
        $data['count_month'] = $this->M_pengaduan->count_by_month();
        $data['berita'] = $this->M_berita->get_all(5);
        $data['pengaduan'] = $this->M_pengaduan->get_all(); 
        $data['_view'] = 'admin/dashboard';
        $this->load->view('admin/layout', $data);
    }
}
