<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    public function get_all($limit=NULL,$cat=NULL)
    {
        $this->db->select("*");
        $this->db->from("berita");

        if($cat != NULL)
        {
            $this->db->where("kategori",$cat);
        }

        if($limit != NULL)
        {
            $query = $this->db->limit($limit);
        }
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_slug($slug)
    {
        $query = $this->db->query("SELECT * FROM berita WHERE slug='$slug'");
        return $query->row();
    }

    public function get_image($idberita)
    {
        $query = $this->db->query("SELECT * FROM galeriberita WHERE idberita='$idberita'");
        return $query->row();
    }

    public function get_kategori()
    {
        $query = $this->db->query("SELECT kategori, COUNT(kategori) AS jumlah FROM berita GROUP BY kategori");
        return $query->result();
    }

}
