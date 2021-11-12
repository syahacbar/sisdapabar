<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengaduan extends CI_Model
{

    function get_all()
    {
        //$query = $this->db->query("SELECT p.*, (SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota, (SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik, (SELECT u1.nama_file FROM upload u1 WHERE u1.kategori = 'dokumentasi1' AND u1.kodelaporan = p.kodelaporan) AS dokumentasi1, (SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2, (SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3 FROM pengaduan p");

        $this->db->select("p.*");
        //$this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota");
        //$this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik");
        // $this->db->select("(SELECT u1.nama_file FROM upload u1 WHERE u1.kategori ='dokumentasi1' AND u1.kodelaporan = p.kodelaporan) AS dokumentasi1");
        // $this->db->select("(SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2");
        // $this->db->select("(SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3");
        $this->db->from("pengaduan p");

        $query = $this->db->get();

        return $query->result();
    }


    function get_filter($inf = NULL, $kab = NULL, $status = NULL, $startdate = NULL, $todate = NULL, $limit = NULL)
    {
        $this->db->select("p.*");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.kab_pelapor) AS nama_kabpelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.kec_pelapor) AS nama_kecpelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.des_pelapor) AS nama_despelapor");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_kabkota) AS nama_kabkota");
        $this->db->select("(SELECT nama FROM wilayah_2020 WHERE kode=p.lokasi_distrik) AS nama_distrik");
        $this->db->select("(SELECT u1.nama_file FROM upload u1 WHERE u1.kategori ='dokumentasi1' AND u1.kodelaporan = p.kodelaporan LIMIT 1) AS dokumentasi1");
        $this->db->select("(SELECT u2.nama_file FROM upload u2 WHERE u2.kategori = 'dokumentasi2' AND u2.kodelaporan = p.kodelaporan) AS dokumentasi2");
        $this->db->select("(SELECT u3.nama_file FROM upload u3 WHERE u3.kategori = 'dokumentasi3' AND u3.kodelaporan = p.kodelaporan) AS dokumentasi3");
        $this->db->from("pengaduan p");

        //kondisi status 
        if ($status != NULL) {
            $this->db->where('p.status', $status);
        }

        if ($startdate != NULL && $todate != NULL) {
            $this->db->where('p.tgl_laporan >=', $startdate);
            $this->db->where('p.tgl_laporan <=', $todate);
        }

        //kondisi infrastruktur terpilih
        if ($inf != NULL && $kab == NULL) {
            $this->db->where('p.infrastruktur', $inf);
        }

        //kondisi kab/kota terpilih
        elseif ($inf == NULL && $kab != NULL) {
            $this->db->where('p.lokasi_kabkota', $kab);
        }

        //kondisi infrastruktur dan kab/kota terpilih
        elseif ($inf != NULL && $kab != NULL) {
            $this->db->where('p.infrastruktur', $inf);
            $this->db->where('p.lokasi_kabkota', $kab);
        } else {
        }
        $this->db->order_by('p.tgl_laporan', 'DESC');
        if ($limit != NULL) {
            $this->db->limit($limit);
        }

        $query = $this->db->get();
        return $query->result();
    }

    function get_image($kodelaporan)
    {
        $query = $this->db->query("SELECT * FROM upload WHERE kodelaporan='$kodelaporan' AND kategori='dokumentasi1'");
        return $query->row();
    }

    function get_allimage($kodelaporan, $kategori = NULL)
    {
        $query = $this->db->query("SELECT * FROM upload WHERE kodelaporan='$kodelaporan' AND kategori='$kategori'");
        return $query->row();
    }


    function add($params)
    {
        $this->db->insert('pengaduan', $params);
        return $this->db->insert_id();
    }


    function get_lastrow()
    {
        $last_idlap = $this->db->order_by('id', "desc")
            ->limit(1)
            ->get('pengaduan');
        return $last_idlap;
    }

    function insert_dokumentasi($params2)
    {
        $this->db->insert('upload', $params2);
        return $this->db->insert_id();
    }

    function get_infra()
    {
        $query = $this->db->query("SELECT infrastruktur FROM pengaduan GROUP BY infrastruktur");
        return $query->result();
    }

    function get_month($int)
    {
        $query = $this->db->query("SELECT MONTH(tgl_laporan) AS bulan, YEAR(CURDATE()) AS tahun FROM pengaduan WHERE MONTH(tgl_laporan)>MONTH(CURDATE())-'$int' GROUP BY MONTH(tgl_laporan) ORDER BY MONTH(tgl_laporan) ASC");
        return $query->result();
    }

    function count_by_infra($infra = NULL)
    {
        $query = $this->db->query("SELECT * FROM pengaduan WHERE infrastruktur='$infra'");
        return $query;
    }

    function count_by_kab()
    {
        $query = $this->db->query("SELECT p.lokasi_kabkota, w.nama, COUNT(p.lokasi_kabkota) as jumlah FROM pengaduan p JOIN wilayah_2020 w ON w.kode=p.lokasi_kabkota GROUP BY p.lokasi_kabkota");
        return $query->result();
    }

    function count_by_month($infra = NULL, $int = NULL)
    {
        if ($infra != NULL) {
            $query = $this->db->query("SELECT tgl_laporan, MONTH(tgl_laporan) AS bulan, COUNT(tgl_laporan) AS jumlah FROM pengaduan WHERE infrastruktur='$infra' AND MONTH(tgl_laporan)>MONTH(CURDATE())-$int GROUP BY MONTH(tgl_laporan)");
        } else {
            $query = $this->db->query("SELECT tgl_laporan, MONTH(tgl_laporan) AS bulan, COUNT(tgl_laporan) AS jumlah FROM pengaduan GROUP BY MONTH(tgl_laporan) ORDER BY bulan DESC");
        }

        return $query->result();
    }

    function edit($data, $idlaporan)
    {
        $this->db->where('id', $idlaporan);
        $this->db->update('pengaduan', $data);
        return TRUE;
    }

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM pengaduan WHERE id='$id'");
        return $query->row();
    }
}
