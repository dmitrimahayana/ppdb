<?php

class beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		//$this->load->helper('tglposisi_helper');
	}


	function index()
	{
		$id = $this->uri->segment(3);
		$tampil = $this->uri->segment(1);
		$data['isi'] = $tampil . "/" . $id;
		$data['menu'] = $tampil . "/menu";
		switch ($id) {
			case 'umum':
				$data['judul']="Informasi Tentang PPDB";
				break;
			case 'jadwal':
				$data['judul']="Jadwal Pelaksanaan";
				break;
			case 'kontak':
				$data['judul']="Kontak";
				break;
			case 'main':
				$data['judul']="";
				break;
			case 'mekanisme-ketentuan':
				$data['judul']="Mekanisme dan Ketentuan";
				break;
			case 'smpn':
				$data['judul']="Mekanisme dan Ketentuan SMP Negeri";
				break;
			case 'sman':
				$data['judul']="Mekanisme dan Ketentuan SMA Negeri";
				break;
			case 'smkn':
				$data['judul']="Mekanisme dan Ketentuan SMK Negeri";
				break;
			default:
				# code...
				break;
		}
		$this->layout->render($data);
	}
}

?>