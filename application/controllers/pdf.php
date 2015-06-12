<?php

/**
* 
*/
class Pdf extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('sekolah_model');
		$this->load->library('cezpdf');
	}

	function index()
	{
		
		$pdfku = new cezpdf("F4", 'portrait');
		$pdfku->ezText('BahrulHalimi');
		//$option_stream = "Ini.pdf";
		$pdfku->ezStream();
		/*$this->load->library('cezpdf');

		$this->cezpdf->ezText('Hello World', 12, array('justification' => 'center'));
		$this->cezpdf->ezSetDy(-10);

		$content = 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
					Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.';

		$this->cezpdf->ezText($content, 10);

		$this->cezpdf->ezStream();*/
 
		
	}

}

?>