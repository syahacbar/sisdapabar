<?php defined('BASEPATH') or exit('No direct script access allowed');

class Akunpengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index()
    {

        $data['users'] = $this->ion_auth->users()->result();
        $data['_view'] = 'admin/akunpengguna';
        $this->load->view('admin/layout', $data);
    }

    public function nonaktifkanuser()
    {
        $id = $this->input->post('iduser');
        if ($this->ion_auth->is_admin())
        {
            $this->ion_auth->deactivate($id);
        }
        echo json_encode(array('status'=>TRUE));
    }

    public function aktifkanuser()
    {
        $id = $this->input->post('iduser');
        if ($this->ion_auth->is_admin())
        {
            $this->ion_auth->activate($id);
        }
        echo json_encode(array('status'=>TRUE));
    }

    public function edit()
    {
        $id = $this->input->post('iduser');
        $data['hasil'] = $id;
        $this->load->view('admin/formedituser', $data);
    }

    
}
