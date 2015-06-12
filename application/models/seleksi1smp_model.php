<?php
class Seleksi1smp_model extends CI_Model{
	function __construct (){
		parent::__construct();
		$this->load->database();
	}

    function get_list_seleksi1($table, $id_diterima_di, $num, $offset){
   		$sql = "SELECT * FROM $table where diterima=$id_diterima_di and diterima <> -2 order by no_urut asc limit $num,$offset";
		$query = $this->db->query($sql);

		if ( $query->num_rows() <= 0 ){
		   return false;
		}

        return $query;
	}
    #

    function get_list_num_rows($table, $id_diterima_di)
    {
   		$sql = "SELECT count(*) as TOTAL FROM $table where diterima=$id_diterima_di and diterima <> -2";
		$query = $this->db->query($sql);

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        $n = $query->row();
	return $n->TOTAL;
	}


    function get_namax($table, $id_diterima_di)
    {
        $sql = "SELECT max(NUN_ASLI) as NA_MAX FROM $table where diterima =$id_diterima_di and diterima <> -2";

        $query = $this->db->query($sql);

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        $n = $query->row();
	return $n->NA_MAX;
    }

    function get_namin($table, $id_diterima_di)
    {
        $sql = "SELECT min(NUN_ASLI) as NA_MIN FROM $table where diterima=$id_diterima_di and diterima <> -2";
		$query = $this->db->query($sql);

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        $n = $query->row();
	return $n->NA_MIN;
    }
    #

}

?>
