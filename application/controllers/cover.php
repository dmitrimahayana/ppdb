<?php

class Cover extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		//$this->load->helper('tglposisi_helper');
	}


	function index()
	{
		$this->load->view('head');
		$this->load->view('sidebar');
		$this->load->view('muka');
		$this->load->view('end');
	}
	function maaf()
	{
		$this->load->view('head');
		$this->load->view('sidebar');
		$this->load->view('maaf');
		$this->load->view('end');
	}
}

?>