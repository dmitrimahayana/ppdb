<?php

class Layout {
	private $ci = null;
	
	public function __construct() {
		$this->ci =& get_instance();
	}

	public function render($data){
		$ret = $this->ci->load->view('head');
		//$ret .= $this->ci->load->view('ayo');
		$ret .= $this->ci->load->view('sidebar');
		if ($data['isi'] == $data['menu']) {
			$ret .= $this->ci->load->view($data['menu']);
		}
		else {
			$ret .= $this->ci->load->view($data['menu']);
			$ret .= $this->ci->load->view('title', $data);
			$ret .= $this->ci->load->view($data['isi'], $data);
		}
		$ret .= $this->ci->load->view('end');
		//$ret .= $this->ci->load->view('footer');
		echo $ret;
	}
}

?>