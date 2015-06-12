<?php

class seleksi1 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('layout');
		$this->load->helper('psb');
		$this->load->helper('tglposisi');
		$this->load->model('sekolah_model');
		$this->load->library('session');
		$this->load->model('status_model');
		$this->load->model('seleksi1smp_model');
		$this->load->model('seleksi1sma_model');
		$this->load->model('seleksi1smk_model');
		//$this->load->helper('tglposisi_helper');
	}


	function index()
	{
		$data['query_combosmp']=$this->sekolah_model->get_smp();
        $data['query_combosmp_']=$this->sekolah_model->get_smp_();
        $data['query_combosma']=$this->sekolah_model->get_sma();
        $data['query_combosmk']=$this->sekolah_model->get_smk();
        $data['query_combosmk_seleksi1']=$this->sekolah_model->get_smk_seleksi1();
        $data['isi'] = "seleksi/seleksi1";
        $data['judul'] = "Seleksi Tahap I";
        $data['menu'] = "seleksi/menu";
		$this->layout->render($data);
	}

	function smpnlist($num=0){
            $table = $this->status_model->get_status('smp');
            $data['query_combosmp']=$this->sekolah_model->get_smp_();
            $data['query_arraysmp']=$this->sekolah_model->get_array_smp_();
            $offset=500;
            $num=(int) $num;

                if($this->input->GET('id_diterima_di')){
                  $id_diterima_di=trim($this->input->GET('id_diterima_di'));
                  $num=0;
                  $this->session->set_userdata('id_diterima_di',$id_diterima_di);
                }

                $id_diterima_di=$this->session->userdata('id_diterima_di');

                $this->load->library('pagination');
                $config['base_url'] = site_url('seleksi1/smpnlist');
                $config['total_rows'] = (int) $this->seleksi1smp_model->get_list_num_rows($table, $id_diterima_di);

                $config['num_links'] = 3;
                $config['per_page'] = $offset;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);

                $data['query_listseleksi1'] = $this->seleksi1smp_model->get_list_seleksi1($table, $id_diterima_di, $num, $offset);
                $data['id_diterima_di'] = $id_diterima_di;
                $data['total_seleksi1']=$config['total_rows'];
                $data['na_min'] = $this->seleksi1smp_model->get_namin($table, $id_diterima_di);
                $data['na_max'] = $this->seleksi1smp_model->get_namax($table, $id_diterima_di);


                $data['num']=$num;


                if (!$data['query_listseleksi1']){
                    $data['judul'] = "Seleksi Tahap I";
                    $data['menu'] = "seleksi/menu";
                    $data['isi'] = "seleksi/not_found";
                    $this->layout->render($data);
                }else{
                	$data['judul'] = "Seleksi Tahap I";
                    $data['menu'] = "seleksi/menu";
                    $data['isi'] = "seleksi/smpn/smpnlist";
                	$this->layout->render($data);
                }
//
//                }
//            else
//            {
//                   $this->load->view('head');
//                        $this->load->view('wrap_start');
//                            $this->load->view('header');
//                            $this->load->view('nav');
//                            $this->load->view('seleksi1/smpn/bc/smpnlist');
//                        $this->load->view('cw_start');
//                            $this->load->view('seleksi1/smpn/smpnlist_notfound', $data);
//                        $this->load->view('cw_end');
//                        $this->load->view('footer');
//                    $this->load->view('end');
//            }

	}

    function smanlist($num=0){
        $table = $this->status_model->get_status('sma');
        
                $data['query_combosma']=$this->sekolah_model->get_sma();
                $data['query_arraysma']=$this->sekolah_model->get_array_sma();


                $offset=500;
                $num=(int) $num;

                //if (isset ($_POST['id_diterima_di']) )
                //if($num == 0){
                if($this->input->GET('id_diterima_di')){
                  $id_diterima_di=trim($this->input->GET('id_diterima_di'));
                  $num=0;
                  $this->session->set_userdata('id_diterima_di',$id_diterima_di);
                }

                $id_diterima_di=$this->session->userdata('id_diterima_di');

                $this->load->library('pagination');
                $config['base_url'] = site_url('seleksi1/smanlist');
                $config['total_rows'] = (int) $this->seleksi1sma_model->get_list_num_rows($table, $id_diterima_di);

                $config['num_links'] = 3;
                $config['per_page'] = $offset;
                $config['first_link'] = 'Awal';
                $config['last_link'] = 'Akhir';
                $config['next_link'] = 'Selanjutnya';
                $config['prev_link'] = 'Sebelumnya';
                $this->pagination->initialize($config);

                $data['query_listseleksi1'] = $this->seleksi1sma_model->get_list_seleksi1($table, $id_diterima_di, $num, $offset);
                $data['id_diterima_di'] = $id_diterima_di;
                $data['total_seleksi1']=$config['total_rows'];
                $data['na_min'] = $this->seleksi1sma_model->get_namin($table, $id_diterima_di);
                $data['na_max'] = $this->seleksi1sma_model->get_namax($table, $id_diterima_di);


                $data['num']=$num;

                $data['judul'] = "Seleksi Tahap I";
                $data['menu'] = "seleksi/menu";
                if (!$data['query_listseleksi1'])
                {
                    $data['isi'] = "seleksi/not_found";
                    $this->layout->render($data);
                }
                else
                {
                    $data['isi'] = "seleksi/sman/smanlist";
                    $this->layout->render($data);
                }
            }

    function smknlist($num=0){
        $table = $this->status_model->get_status('smk');
    
        $data['query_combosmk']=$this->sekolah_model->get_smk();
        $data['query_combosmk_seleksi1']=$this->sekolah_model->get_smk_seleksi1();

        $data['query_arraysmk']=$this->sekolah_model->get_array_smk();


        $offset=500;
        $num=(int) $num;

        if ($this->input->GET('id_diterima_di') ){
          $id_diterima_di=trim($this->input->GET('id_diterima_di'));
          $num=0;
          $this->session->set_userdata('id_diterima_di',$id_diterima_di);
        }

            $id_diterima_di=$this->session->userdata('id_diterima_di');
            $data['stat'] = $id_diterima_di;
            $this->load->library('pagination');
            $config['base_url'] = site_url('seleksi1/smknlist');
            $config['total_rows'] = (int) $this->seleksi1smk_model->get_list_num_rows($table, $id_diterima_di);

            $config['num_links'] = 3;
            $config['per_page'] = $offset;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Selanjutnya';
            $config['prev_link'] = 'Sebelumnya';
            $this->pagination->initialize($config);

            $data['query_listseleksi1'] = $this->seleksi1smk_model->get_list_seleksi1($table, $id_diterima_di, $num, $offset);
            $data['id_diterima_di'] = $id_diterima_di;
            $data['total_seleksi1']=$config['total_rows'];
            $data['na_min'] = $this->seleksi1smk_model->get_namin($table, $id_diterima_di);
            $data['na_max'] = $this->seleksi1smk_model->get_namax($table, $id_diterima_di);


            $data['num']=$num;

            $data['judul'] = "Seleksi Tahap I";
            $data['menu'] = "seleksi/menu";
            if (!$data['query_listseleksi1'])
            {
                $data['isi'] = "seleksi/not_found";
                $this->layout->render($data);
            }
            else
            {
                $data['isi'] = "seleksi/smkn/smknlist";
                $this->layout->render($data);
            }
    }


}

?>