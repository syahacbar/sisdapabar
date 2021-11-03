<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $data['_view'] = "public/galeri";
        $this->load->view('public/layout',$data);
    }
}