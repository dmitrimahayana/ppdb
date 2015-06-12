<?php

class Pendaftar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		$this->load->model('sekolah_model');
		$this->load->model('pendaftarsmp_model');
		$this->load->model('pendaftarsma_model');
		$this->load->model('pendaftarsmk_model');
		$this->load->model('status_model');
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

	function smpnnodaf($id_daf= -1){
		$table = $this->status_model->get_status('smp');
		//$table = "terima_smp_1";
		$data['judul'] = "Pencarian Seleksi Tahap I";
        $data['menu'] = "seleksi/menu";
		if ($this->input->GET('no_pendaftaran') && trim($this->input->GET('no_pendaftaran')) != "" ){
                    $id_daf =trim($this->input->GET('no_pendaftaran'));
                }
                if ($id_daf == -1)//if kosong
                {
                	$data['no_ujian'] = $id_daf;
                	$data['isi'] = "pendaftar/not_found";
                 	$this->layout->render($data);
                    return;
                }

        $data['query_datasiswa'] = $this->pendaftarsmp_model->get_data_siswa($table, $id_daf);
//        $data['query_datasiswa_cadangan'] = $this->pendaftarsmp_model->get_data_siswa_cadangan("terima_smp_1", $id_daf);
        $data['query_arraysmp_']=$this->sekolah_model->get_array_smp_();
        $data['query_arraysmp']=$this->sekolah_model->get_array_smp();
        
         if ($data['query_datasiswa'])
            {
                $data['tahap']=1;
                $data['hasil'] = "Sementara";
                //$data['hasil'] = "Final";
                $data['isi'] = "pendaftar/smpn/smpnnodaf";
                $this->layout->render($data);
            } 
            else if ( (!$data['query_datasiswa'])){
            	$data['no_ujian'] = $id_daf;
                $data['isi'] = "pendaftar/not_found";
                $this->layout->render($data);
            }
        
//        if ( (!$data['query_datasiswa']) && (!$data['query_datasiswa_cadangan']) ){
//            $this->load->view('head');
//  				$this->load->view('wrap_start');
//  					$this->load->view('header');
//  					$this->load->view('nav');
//  					$this->load->view('pendaftar/smpn/bc/smpnnodaf');
//  				$this->load->view('cw_start');
//  						$this->load->view('pendaftar/smpn/smpnnodaf_notfound');
//  				$this->load->view('cw_end');
//  				$this->load->view('footer');
//  			$this->load->view('end');
//        }elseif ($data['query_datasiswa_cadangan']) {
//            $data['query_datasiswa']=$data['query_datasiswa_cadangan'];
//            $data['tahap']=2;
//
//            $this->load->view('head');
//				$this->load->view('wrap_start');
//					$this->load->view('header');
//					$this->load->view('nav');
//					$this->load->view('pendaftar/smpn/bc/smpnnodaf');
//				$this->load->view('cw_start');
//					$this->load->view('pendaftar/smpn/smpnnodaf_lihat', $data);
//				$this->load->view('cw_end');
//				$this->load->view('footer');
//			$this->load->view('end');
//
//        }elseif 
           

	}

	function smannodaf($id_daf= -1)
	{
		$table = $this->status_model->get_status('sma');
		$data['judul'] = "Seleksi Tahap I";
		$data['menu'] = "seleksi/menu";
		if ($this->input->GET('no_pendaftaran') && trim($this->input->GET('no_pendaftaran')) != "" ){
                    $id_daf =trim($this->input->GET('no_pendaftaran'));
                }
                if ($id_daf == -1)
                {
                    $data['isi'] = "pendaftar/not_found";
                    $this->layout->render($data);
                    return;
                }

                $data['query_datasiswa'] = $this->pendaftarsma_model->get_data_siswa($table, $id_daf);
                $data['query_datasiswa_cadangan'] = $this->pendaftarsma_model->get_data_siswa_cadangan("terima_sma_2", $id_daf);
                $data['query_arraysma']=$this->sekolah_model->get_array_sma();

                if ( (!$data['query_datasiswa']) && (!$data['query_datasiswa_cadangan']) ){
                   $data['isi'] = "pendaftar/not_found";
                   $this->layout->render($data);
                }elseif ($data['query_datasiswa_cadangan']){
                    $data['query_datasiswa']=$data['query_datasiswa_cadangan'];
                    $data['tahap']=2;
                    $data['isi'] = "pendaftar/sman/smannodaf";
                  	$this->layout->render($data);
        }elseif ($data['query_datasiswa']){
            $data['tahap']=1;
            $data['isi'] = "pendaftar/sman/smannodaf";
            $this->layout->render($data);
        } ;

	}

	function smknnodaf($id_daf=0){
		$table = $this->status_model->get_status('smk');
		
		if ($this->input->GET('no_pendaftaran') && trim($this->input->GET('no_pendaftaran')) != "" ){
          $id_daf =trim($this->input->GET('no_pendaftaran'));
        }
        $data['judul'] = "Seleksi Tahap I";
		$data['menu'] = "seleksi/menu";
        if ($id_daf == -1)
        {
            $data['isi'] = "pendaftar/not_found";
            $this->layout->render($data);
			return;
        }

        $data['query_datasiswa'] = $this->pendaftarsmk_model->get_data_siswa($table, $id_daf);
        $data['query_datasiswa_cadangan'] = $this->pendaftarsmk_model->get_data_siswa_cadangan("terima_smk_1", $id_daf);
        $data['query_arraysmk']=$this->sekolah_model->get_array_smk();

        if ( (!$data['query_datasiswa']) && (!$data['query_datasiswa_cadangan']) ){
           $data['isi'] = "pendaftar/not_found";
           $this->layout->render($data);
        }elseif ($data['query_datasiswa_cadangan']){
            $data['query_datasiswa']=$data['query_datasiswa_cadangan'];
            $data['tahap']=2;
            $data['isi'] = "pendaftar/smkn/smknnodaf";
            $this->layout->render($data);

        }elseif ($data['query_datasiswa']){
            $data['tahap']=1;
            $data['isi'] = "pendaftar/smkn/smknnodaf";
            $this->layout->render($data);
        } ;

	}

}

?>