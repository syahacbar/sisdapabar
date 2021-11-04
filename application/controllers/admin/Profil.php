<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index()
    {
        $data['_view'] = "admin/profil";
        $this->load->view('admin/layout',$data);
    }
}