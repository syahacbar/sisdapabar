<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "PROFIL";
        $data['_view'] = "public/profil";
        $this->load->view('public/layout',$data);
    }
}