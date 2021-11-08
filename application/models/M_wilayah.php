<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wilayah extends CI_Model
{
    public function get_by_id($kode)
    {
        //kita persempit querynya hanya ambil nama wilayah di Papua Barat, supaya gak terlalu loading
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LEFT(kode,2) = '92' AND kode='$kode'");
        return $query->row();
    }

    public function get_all_kab()
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 5 AND LEFT(kode,2) = '92'");
        return $query->result();
    }
}
