<?php

class Seleksi1sma_model extends CI_Model{

    function __construct(){
		parent::__construct();
		$this->load->database('default',TRUE);
    }

    function get_list_seleksi1($table, $id_diterima, $num, $offset){
	if ($id_diterima == '#') {return false;}
   		$sql = "SELECT * FROM `$table` where diterima =? and diterima <> -2 order by no_urut asc limit ?, ?";
		$query = $this->db->query($sql,array($id_diterima, $num, $offset));

		if ( $query->num_rows() <= 0 ) return false;

        return $query;
	}

    function get_list_num_rows($table, $id_diterima){
   		$sql = "SELECT count(*) TOTAL FROM `$table` where diterima =? and diterima <> -2";
		$query = $this->db->query($sql,array($id_diterima));

		if ( $query->num_rows() <= 0 ) return false;

        return $query->row()->TOTAL;
	}


    function get_namax($table, $id_diterima){
        $sql = "SELECT max(NUN_ASLI) NA_MAX FROM `$table` where diterima =? and diterima <> -2";

        $query = $this->db->query($sql,array($id_diterima));

		if ( $query->num_rows() <= 0 ) return false;

        return $query->row()->NA_MAX;
    }

    function get_namin($table, $id_diterima){
        $sql = "SELECT min(NUN_ASLI) NA_MIN FROM `$table` where diterima=? and diterima <> -2";
		$query = $this->db->query($sql,array($id_diterima));

		if ( $query->num_rows() <= 0 ) return false;

        return $query->row()->NA_MIN;
    }
}
?>
