<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pengaduan','M_wilayah','M_setting']);
        $this->load->library('recaptcha'); 

    }
    function generatekodelaporan()
    {
        //generate kode laporan
        $last_idlap = $this->M_pengaduan->get_lastrow();
        if ($last_idlap->num_rows > 0) {
            $idlap = (int)$last_idlap->row()->id + 1;
        } else {
            $idlap = 1;
        }
        return $kodelaporan = date("YmdHis").$idlap;
    }

    function index()
    {
        //map
        $setting=$this->M_setting->list_setting();
        $this->load->library('googlemaps');
        $config['center'] = "$setting->latitude, $setting->longitude";
        $config['zoom'] = "$setting->zoom";
        $config['apiKey'] = "$setting->apikey";
        $this->googlemaps->initialize($config);

        $marker['position'] = "$setting->latitude, $setting->longitude";
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);

        $map=$this->googlemaps->create_map();
        $data['map'] = $map;

        $data['title'] = "LAPOR";
        $data['kodelaporan'] = $this->generatekodelaporan();
    	$data['wil_kab'] = $this->M_wilayah->get_all_kab();
        $data['recaptcha'] = $this->recaptcha->create_box();
        $data['_view'] = "public/lapor";
    	$this->load->view('public/layout',$data);
    }

    function savelaporan()
    {
    	$params = array(
    		'kodelaporan' => $this->input->post('kodelaporan'),
	    	'tgl_laporan' => date("Y-m-d H:i:s")
	    		,
	    	'nama_pelapor' => $this->input->post('nama_pelapor'),
	    	'nik' => $this->input->post('nik'),
	    	'alamat_pelapor' => $this->input->post('alamat_pelapor'),
	    	'kab_pelapor' => $this->input->post('kab_pelapor'),
	    	'kec_pelapor' => $this->input->post('kec_pelapor'),
	    	'des_pelapor' => $this->input->post('des_pelapor'),
	    	'no_hp' => $this->input->post('no_hp'),
	    	'email' => $this->input->post('email'),
	    	'isi_laporan' => $this->input->post('isi_laporan'),
	    	'infrastruktur' => $this->input->post('infrastruktur'),
	    	'nama_ruasjalan' => $this->input->post('nama_ruasjalan'),
	    	'lokasi_kabkota' => $this->input->post('lokasi_kabkota'),
	    	'lokasi_distrik' => $this->input->post('lokasi_distrik'),
	    	'latitude' => $this->input->post('latitude'),
	    	'longitude' => $this->input->post('longitude'),
	    	'status' => 'Menunggu',
    	);

    	 $laporan_id = $this->M_pengaduan->add($params);
    	 echo json_encode(array('status' => TRUE));

    }

    function add_ajax_kec($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 8 AND LEFT(kode,5) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kecamatan/Distrik - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 13 AND LEFT(kode,8) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kelurahan/Desa - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function uploadktp()
    {

        $config['upload_path']   = FCPATH.'/upload/ktp/';
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('filektp')){
            $token=$this->input->post('token_foto');
            $kodelaporan=$this->input->post('kodelaporan');
            $file_name=$this->upload->data('file_name');
            $kategori='ktp';
            $uploaded_on=date("Y-m-d H:i:s");
            $this->db->insert('upload',array('nama_file'=>$file_name,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
        }
    }


    function uploaddokumentasi1()
    {
            $config['upload_path']   = FCPATH.'/upload/dokumentasi/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);

            if($this->upload->do_upload('filedokumentasi1')){
                $token=$this->input->post('token_dokumentasi');
                $kodelaporan=$this->input->post('kodelaporan');
                $nama=$this->upload->data('file_name');
                $kategori='dokumentasi1';
                $uploaded_on=date("Y-m-d H:i:s");
                $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
            }

    }

    function uploaddokumentasi2()
    {
            $config['upload_path']   = FCPATH.'/upload/dokumentasi/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);

            if($this->upload->do_upload('filedokumentasi2')){
                $token=$this->input->post('token_dokumentasi');
                $kodelaporan=$this->input->post('kodelaporan');
                $nama=$this->upload->data('file_name');
                $kategori='dokumentasi2';
                $uploaded_on=date("Y-m-d H:i:s");
                $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
            }

    }

    function uploaddokumentasi3()
    {
            $config['upload_path']   = FCPATH.'/upload/dokumentasi/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);

            if($this->upload->do_upload('filedokumentasi3')){
                $token=$this->input->post('token_dokumentasi');
                $kodelaporan=$this->input->post('kodelaporan');
                $nama=$this->upload->data('file_name');
                $kategori='dokumentasi3';
                $uploaded_on=date("Y-m-d H:i:s");
                $this->db->insert('upload',array('nama_file'=>$nama,'token'=>$token,'kategori'=>$kategori,'uploaded_on'=>$uploaded_on,'kodelaporan'=>$kodelaporan));
            }

    }
    
    // INI JUGA CUMA ALAT BANTU
    // public function insertdummy($x)
    // {
    //     $month = '08';
    //     for($i=1;$i<=$x;$i++)
    //     {
    //         $kodelaporan = $this->generatekodelaporan().rand(1,100);
    //         $params = array(
    //             'kodelaporan' => $kodelaporan,
    //             'tgl_laporan' => date("Y-".$month."-d H:i:s")
    //                 ,
    //             'nama_pelapor' => 'pelapor-'.rand(1,100),
    //             'nik' => rand(100000000,900000000),
    //             'alamat_pelapor' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak',
    //             'kab_pelapor' => '92.0'.rand(1,9),
    //             'kec_pelapor' => '92.0'.rand(1,9).'0'.rand(1,4),
    //             'des_pelapor' => '92.0'.rand(1,9).'.0'.rand(1,4).'.'.rand(1000,1010),
    //             'no_hp' => rand(10000000000,999999999999),
    //             'email' => 'email'.rand(1,100).'@mail.com',
    //             'isi_laporan' => 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak',
    //             'infrastruktur' => 'Irigasi',
    //             'nama_ruasjalan' => 'Jalan '.rand(1,100),
    //             'lokasi_kabkota' => '92.0'.rand(1,9),
    //             'lokasi_distrik' => '92.0'.rand(1,9).'.0'.rand(1,4),
    //             'latitude' => rand(100,1000),
    //             'longitude' => rand(100,1000),
    //             'status' => 'Diterima',
    //         );
    //         $params2 = array(
    //             'nama_file' => 'noimageavail.jpg',
    //             'kategori' => 'dokumentasi1',
    //             'kodelaporan' => $kodelaporan,
    //         );

    //         $laporan_id = $this->M_pengaduan->add($params);
    //         $this->M_pengaduan->insert_dokumentasi($params2);
    //     }
        
    // }
}