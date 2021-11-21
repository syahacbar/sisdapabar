<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    public function get_all($limit = NULL, $cat = NULL)
    {
        $this->db->select("*");
        $this->db->from("berita");
        $this->db->order_by("tanggal", "desc");

        if ($cat != NULL) {
            $this->db->where("kategori", $cat);
        }

        if ($limit != NULL) {
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

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM berita WHERE id='$id'");
        return $query->row();
    }

    public function get_by_cat($cat)
    {
        $query = $this->db->query("SELECT * FROM berita WHERE kategori='$cat'");
        return $query->result();
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

    public function get_slider()
    {
        $query = $this->db->query("SELECT * FROM galeriberita WHERE slider='1'");
        return $query->result();
    }

    public function get_slider_by_idberita($idberita)
    {
        $query = $this->db->query("SELECT * FROM galeriberita WHERE idberita='$idberita'");
        return $query;
    }

    public function switchslider($idberita, $sliderstatus)
    {
        $query = $this->db->query("UPDATE galeriberita SET slider='$sliderstatus' WHERE idberita='$idberita'");
        return TRUE;
    }

    public function add_berita($params)
    {
        $this->db->insert('berita', $params);
        return $this->db->insert_id();
    }

    public function get_lastrow()
    {
        $last_idbr = $this->db->order_by('id')
            ->limit(1)
            ->get('berita');
        return $last_idbr;
    }

    public function deletedata($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("berita");
        return true;
    }

    public function edit($data)
    {
        // $this->db->where('id', $id);
        // $this->db->update('berita', $data);
        // return TRUE;

        $sql = "UPDATE berita SET judul='" .$data['judul'] ."', isi='" .$data['isi'] ."', tanggal='" .$data['tanggal'] ."', kategori='" .$data['kategori'] ."',slug='" .$data['slug'] ."' WHERE id='" .$data['id'] ."'";

        $this->db->query($sql);

        return $this->db->affected_rows();
    }

}
