<?php

class sekolah extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->model('sekolah_model');
		$this->load->helper('psb');
		//$this->load->helper('tglposisi_helper');
	}

	/*function index(){
		$this->load->view('cover');
	}*/

	function index()
	{
		$data = "";
		$id = $this->uri->segment(3);
		$tampil = $this->uri->segment(1);
		$data['isi'] = $tampil . "/" . $id;
		$data['menu'] = $tampil . "/menu";
		switch ($id) {
			case 'beranda':
				$data['judul'] = "Sekolah";
				break;
			case 'sma':
				$data['judul'] = "SMA Negeri";
				break;
			case 'smp':
				$data['judul'] = "SMP Negeri";
				break;
			case 'smk':
				$data['judul'] = "SMK Negeri";
				break;
			case 'main':
				$data['judul'] = "";
				break;
			default:
				# code...
				break;
		}
		$this->layout->render($data);
	}

	function beranda() {
		$data['isi'] = "sekolah/beranda";
		$data['menu'] = "sekolah/menu";
		$data['judul'] = "Sekolah";
		$this->layout->render($data);
	}

	function smpn()
	{
		$data['sekolah_smp'] = $this->sekolah_model->get_smp();
		$data['isi'] = "sekolah/smp";
		$data['menu'] = "sekolah/menu";
		$data['judul'] = "SMP Negeri";
		$this->layout->render($data);
	}

	function sman()
	{
		$data['sekolah_sma'] = $this->sekolah_model->get_sma();
		$data['isi'] = "sekolah/sma";
		$data['menu'] = "sekolah/menu";
		$data['judul'] = "SMA Negeri";
		$this->layout->render($data);
	}

	function smkn()
	{
		$data['sekolah_smk'] = $this->sekolah_model->get_smk();
		$data['isi'] = "sekolah/smk";
		$data['menu'] = "sekolah/menu";
		$data['judul'] = "SMK Negeri";
		$this->layout->render($data);
	}
}

?>