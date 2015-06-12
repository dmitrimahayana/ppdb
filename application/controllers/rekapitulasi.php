<?php

class rekapitulasi extends CI_Controller {
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
			case 'main':
				$data['judul'] = "";
				break;
			case 'r2009':
				$data['judul'] = "Tahun 2009";
				break;
			case 'r2010':
				$data['judul'] = "Tahun 2010";
				break;
			case 'r2011':
				$data['judul'] = "Tahun 2011";
				break;
			default:
				# code...
				break;
		}
		$this->layout->render($data);
	}

	function r2009() {
		$data['isi'] = "rekapitulasi/2009";
		$data['menu'] = "rekapitulasi/menu";
		$data['judul'] = "Tahun 2009";
		$this->layout->render($data);
	}

	function r2010() {
		$data['isi'] = "rekapitulasi/2010";
		$data['menu'] = "rekapitulasi/menu";
		$data['judul'] = "Tahun 2010";
		$this->layout->render($data);
	}

	function r2011() {
		$data['isi'] = "rekapitulasi/2011";
		$data['menu'] = "rekapitulasi/menu";
		$data['judul'] = "Tahun 2011";
		$this->layout->render($data);
	}

	function r2012() {
		$data['isi'] = "rekapitulasi/2012";
		$data['menu'] = "rekapitulasi/menu";
		$data['judul'] = "Tahun 2012";
		$this->layout->render($data);
	}
}

?>
