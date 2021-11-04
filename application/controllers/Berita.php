<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_berita']);
    }    

    public function index()
    {
        $data['berita'] = $this->M_berita->get_all();
        $data['title'] = "BERITA";
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/berita";
        $this->load->view('public/layout',$data);
    }

    public function kategori($cat)
    {
        $data['title'] = "BERITA - ".$cat;
        $data['berita'] = $this->M_berita->get_all(NULL,$cat);
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/berita";
        $this->load->view('public/layout',$data);
    }

    public function detail($slug)
    {
        $data['title'] = "DETAIL BERITA";
        $data['detail'] = $this->M_berita->get_by_slug($slug);
        $data['list_kategori'] = $this->M_berita->get_kategori();
        $data['_view'] = "public/detail_berita";
        $this->load->view('public/layout',$data);
    }

    //INI CUMA ALAT BANTU
    // public function create_slug()
    // {
    //     $query = $this->M_berita->get_all();
    //     foreach($query AS $q)
    //     {
    //         $lowcase = strtolower($q->judul);
    //         $slug = url_title($lowcase,'dash',true);
    //         $this->db->query("UPDATE berita SET slug='".$slug."' WHERE id='$q->id'");
    //     }
    // }
}