<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->query("SELECT * FROM berita");
        return $query->result();
    }

    public function get_image($idberita)
    {
        $query = $this->db->query("SELECT * FROM galeriberita WHERE idberita='$idberita'");
        return $query->row();
    }

}
