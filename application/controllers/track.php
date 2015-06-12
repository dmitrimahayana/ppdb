<?php

class Track extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		$this->load->model('sekolah_model');
		$this->load->model('track_model');
		//$this->load->helper('tglposisi_helper');
	}


	function index()
	{
		$id = "main";
		$tampil = $this->uri->segment(1);
		$data['isi'] = $tampil . "/" . $id;
		$data['menu'] = $tampil . "/menu";
		switch ($id) {
			case 'main':
				$data['judul'] = "";
				break;
			
			default:
				# code...
				break;
		}
		$this->layout->render($data);
	}

	function sebarun()
	{
		$data['isi'] = "track/sebarun";
		$data['menu'] = "track/menu";
		$data['judul'] = "Sebaran Nilai UN SD dan SMP 2013";
		$this->layout->render($data);
	}

	function cek()
	{
		$data['isi'] = "track/cek";
		$data['menu'] = "track/menu";
		$data['judul'] = "Status Pendaftaran Peserta";
		$this->layout->render($data);
	}

	function hasil()
	{
		$nama = "";
		$tingkat = "";
		$nama = $this->input->GET('nama');
		$tingkat = $this->input->GET('tingkat');

		if(trim($nama) != ""){
			$this->cari_nama($tingkat, $nama);
		}else{
			$no_ujian = $this->input->GET('no_ujian');
			/*$data['no_ujian'] = $this->input->GET('no_ujian');
			$data['isi'] = "pendaftar/status";
		$data['menu'] = "pendaftar/menu";
		$data['judul'] = "Status Pendaftaran Peserta";
		$this->layout->render($data);*/
			$this->check($tingkat, $no_ujian);
		}
		/*$data['isi'] = "pendaftar/status";
		$data['menu'] = "pendaftar/menu";
		$data['judul'] = "Status Pendaftaran Peserta";
		$this->layout->render($data);*/
	}

	function status()
	{
		$tingkat = $this->uri->segment(3);
		$no_ujian = $this->uri->segment(4);
		$this->check($tingkat,$no_ujian);
	}

	private function cari_nama($tingkat, $nama){
            /*if($tingkat == "smp" )
                $table = "terima_" . $tingkat . "_1";
            else if($tingkat == "sma" )
                $table = $this->status_model->get_status('sma');
            else if($tingkat == "smk" )
                $table = $this->status_model->get_status('smk');*/
            $table = "terima_" . $tingkat . "_1";
            
                    if($tingkat == 'smp'){
                            $tbl_pendaftar = $table;
                            $tbl_un = 'master_un_sd';
                    }elseif($tingkat == 'sma'){
                            $tbl_pendaftar = $table;
                            $tbl_un = 'master_un_smp';
                    }elseif($tingkat == 'smk'){
                            $tbl_pendaftar = $table;
                            $tbl_un = 'master_un_smp';
                    }else{
                            $data['isi'] = "track/not_found";
                    }

                    $data['query'] = $this->track_model->cari_nama($tbl_pendaftar, $nama);
                    $data['total'] = $this->track_model->total_cari_nama($tbl_pendaftar, $nama);
                    $data['nama'] = $nama;
                    $data['tingkat'] = $tingkat;
                    $data['menu']= "track/menu";
                    $data['judul'] = "Status Pendaftaran Peserta";
                    if($tingkat == "smp")
                    		$data['isi']="track/lihat_nama_smp";
                    else if($tingkat == "sma")
                            $data['isi']="track/lihat_nama_sma";
                    else if ($tingkat == "smk")
                            $data['isi']="track/lihat_nama_smk";

                    $this->layout->render($data);
	}

	private function check($tingkat, $no_ujian){
            /*if($tingkat == "smp" )
                $table = $this->status_model->get_status('smp');
            else if($tingkat == "sma" )
                $table = $this->status_model->get_status('sma');
            else if($tingkat == "smk" )
                $table = $this->status_model->get_status('smk');*/
        $table = "terima_" . $tingkat . "_1";
        
        $data['menu']= "track/menu";
        $data['judul'] = "Status Pendaftaran Peserta";
		if($tingkat == 'smp'){
                        $tbl_pendaftar = $table;
                        $tbl_un = 'master_un_sd';
                }elseif($tingkat == 'sma'){
                        $tbl_pendaftar = $table;
                        $tbl_un = 'master_un_smp';
                }elseif($tingkat == 'smk'){
                        $tbl_pendaftar = $table;
                        $tbl_un = 'master_un_smp';
		}else{
			$data['isi'] = "track/not_found";
			$this->layout->render($data);
		}
		
		$data['tingkat'] = $tingkat;
		$data['no_ujian'] = $no_ujian;
		$data['query'] = $this->track_model->cari($table, 'master_un_sd', $no_ujian);
		
		if($data['query'] == 4){
			$data['isi']= "track/not_found";
		}else{
			$data['peserta'] = $this->track_model->get_peserta($tbl_pendaftar, $no_ujian);
			$data['isi'] = "track/lihat";
		}
		$this->layout->render($data);
	}

	function hasil_smk()
        {
            $no_un = $this->input->GET('no_ujian');
	     	$no_un = trim($no_un);
            //$table = $this->status_model->get_status('smk');
            $table = "terima_smk_1";
            
            $data["no_ujian"] = $this->input->GET('no_ujian');
            $data["table"] = $table;
            $this->load->model('pendaftarsmk_model');
            $data["detail_tabel"] = $this->pendaftarsmk_model->get_detaildaftar($no_un, $table);
            $data['judul'] = "Status Pendaftaran Peserta";
            $data['isi'] = "track/hasil_smk";
            $data['menu'] = "track/menu";
            $this->layout->render($data);
        }

    function hasil_smk_()
        {
            $nama = $this->input->GET('nama');
	    	$nama = mysql_real_escape_string($nama);
            //$table = $this->status_model->get_status('smk');
            $table = "terima_smk_1";
            
            $data["table"] = $table;
            $this->load->model('pendaftarsmk_model');
            
            $data["detail_tabel"] = $this->pendaftarsmk_model->get_listdaftar($nama, $table);
            $data["nama"] = $this->input->GET('nama'); 
            $data['judul'] = "Status Pendaftaran Peserta";
            $data['isi'] = "track/hasil_smk_";
            $data['menu'] = "track/menu";
            $this->layout->render($data);
        }
}

?>
