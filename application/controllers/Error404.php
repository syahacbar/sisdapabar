<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error404 extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        // load base_url
        $this->load->helper('url');
    }

    public function index()
    {
        $data['_view'] = 'public/layout';
        $this->load->view('errors/html/error_404', $data);
    }
}
