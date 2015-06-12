<?php
class Status_model extends CI_Model {

	function __construct () {
		parent::__construct();
		$this->load->database();	
	}

	function get_status($db){
		if($db == 'smp'){
			$table = 'status_terima_smp';
		}elseif($db == 'sma'){
			$table = 'status_terima_sma';
		}else{
			$table = 'status_terima_smk';
		}
		$q = $this->db->get($table);
		$n = $q->first_row();
		return 'terima_'.$db.'_'.$n->status_id;
	}
}
?>
