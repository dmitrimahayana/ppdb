<?php

class Pendaftarsmp_model extends CI_Model{
	function __construct (){
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}

	function get_data_siswa($table, $no_pendaftaran){
   		$sql = "SELECT * FROM `$table` where no_ujian =? limit 1";
		$query = $this->db->query($sql,array($no_pendaftaran));

		if ( $query->num_rows() <= 0 ) return false;

        return $query;
	}

	function get_data_siswa_cadangan($table, $no_pendaftaran)
    {
   		$sql = "SELECT * FROM `$table` where no_ujian =? limit 1";
		$query = $this->db->query($sql,array($no_pendaftaran));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query;
	}
    ##

    function get_list_pendaftar($table, $id_kawasan, $num, $offset)
    {
   		$sql = "SELECT * FROM `$table` where ID_KAWASAN =? order by no_ujian limit ?, ?";
		$query = $this->db->query($sql,array($id_kawasan, $num, $offset));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}

        return $query;
	}
    #

    function get_list_num_rows($table, $id_kawasan)
    {
   		$sql = "SELECT count(*) TOTAL FROM `$table` where ID_KAWASAN=?";
		$query = $this->db->query($sql,array($id_kawasan));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query->row()->TOTAL;
	}


    function get_namax($table, $id_kawasan)
    {
        $sql = "SELECT max(NILAI_AKHIR) NA_MAX FROM `$table` where ID_KAWASAN=?";
		$query = $this->db->query($sql,array($id_kawasan));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query->row()->NA_MAX;
    }

    function get_namin($table, $id_kawasan)
    {
        $sql = "SELECT min(NILAI_AKHIR) NA_MIN FROM `$table` where ID_KAWASAN=?";
		$query = $this->db->query($sql,array($id_kawasan));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query->row()->NA_MIN;
    }
    #

}

?>