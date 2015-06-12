<?php

class pagu extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		$this->load->model('pagu_model');
		//$this->load->helper('tglposisi_helper');
	}


	function index()
	{
		$data = "";
		$id = $this->uri->segment(3);
		$tampil = $this->uri->segment(1);
		$data['isi'] = $tampil . "/" . $id;
		$data['menu'] = $tampil . "/menu";
		switch ($id) {
			case 'main':
				$data['judul'] = "";
				break;
			case 'beranda':
				$data['judul'] = "Pagu";
				break;
			
			default:
				# code...
				break;
		}
		$this->layout->render($data);
	}

	function beranda() {
		$data['isi'] = "pagu/beranda";
		$data['menu'] = "pagu/menu";
		$data['judul'] = "Pagu";
		$this->layout->render($data);
	}

	function smpn() {
		$data['pagu_smp'] = $this->pagu_model->get_pagu_smp();
		$data['isi'] = "pagu/smpn";
		$data['menu'] = "pagu/menu";
		$data['judul'] = "Pagu SMP Negeri";
		$this->layout->render($data);
	}

	function sman() {
		$data['pagu_sma'] = $this->pagu_model->get_pagu_sma();
		$data['isi'] = "pagu/sman";
		$data['menu'] = "pagu/menu";
		$data['judul'] = "Pagu SMA Negeri";
		$this->layout->render($data);
	}

	function smkn() {
		$data['smk_71'] = $this->pagu_model->get_pagu_smk_71();
		$data['smk_72'] = $this->pagu_model->get_pagu_smk_72();
		$data['smk_73'] = $this->pagu_model->get_pagu_smk_73();
		$data['smk_74'] = $this->pagu_model->get_pagu_smk_74();
		$data['smk_75'] = $this->pagu_model->get_pagu_smk_75();
		$data['isi'] = "pagu/smkn";
		$data['menu'] = "pagu/menu";
		$data['judul'] = "Pagu SMK Negeri";
		$this->layout->render($data);
	}
}

?>
