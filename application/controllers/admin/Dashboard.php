<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_wilayah','M_pengaduan']);
    } 

    public function index()
    {
        $data['count_irigasi'] = $this->M_pengaduan->count_infra('Irigasi');
        $data['count_sungai'] = $this->M_pengaduan->count_infra('Sungai');
        $data['count_pantai'] = $this->M_pengaduan->count_infra('Pantai');
        $data['listkabupaten'] = $this->M_wilayah->get_all_kab();
        $data['_view'] = 'admin/dashboard';
        $this->load->view('admin/layout', $data);
    }
}
