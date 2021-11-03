<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_wilayah']);
    }

    public function index()
    {
        $data['listkabupaten'] = $this->M_wilayah->get_all_kab();
        $data['_view'] = 'admin/dashboard';
        $this->load->view('admin/layout', $data);
    }
}
