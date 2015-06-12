<?php

class sementara extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		$this->load->helper('tglposisi_helper');
	}

	/*function index(){
		$this->load->view('cover');
	}*/

	function hasilseleksi()
	{
		$data['tanggal'] = "26 Juni 2013";
		$data['apa'] = "Hasil Seleksi";
		$data['isi'] = "sementara";
		$data['menu'] = "";
		$data['judul'] = "";
		$this->load->view('head');
		$this->load->view('sidebar');
		$this->load->view('sementara', $data);
		$this->load->view('end');
	}

	function statusdaftar()
	{
		$data['tanggal'] = "26 Juni 2013";
		$data['apa'] = "Status Pendaftaran";
		$data['isi'] = "sementara";
		$data['menu'] = "";
		$data['judul'] = "";
		$this->load->view('head');
		$this->load->view('sidebar');
		$this->load->view('sementara', $data);
		$this->load->view('end');
	}	
}

?>