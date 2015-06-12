<?php

class Pendaftarsma_model extends CI_Model
{
	public $db;
    ##
	function __construct ()
    {
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}

    ##
	function get_data_siswa($table, $no_pendaftaran)
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

    function get_list_pendaftar($table, $id_lokasi, $num, $offset)
    {
   		$sql = "SELECT * FROM `$table` where lokasi =? order by no_ujian limit ?, ?";
		$query = $this->db->query($sql,array($id_lokasi, $num, $offset));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}

        return $query;
	}
    #

    function get_list_num_rows($table, $id_lokasi)
    {
   		$sql = "SELECT count(*) TOTAL FROM `$table` where lokasi=?";
		$query = $this->db->query($sql,array($id_lokasi));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query->row()->TOTAL;
	}


    function get_namax($table, $id_lokasi)
    {
        $sql = "SELECT max(na) NA_MAX FROM `$table` where lokasi=?";
		$query = $this->db->query($sql,array($id_lokasi));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query->row()->NA_MAX;
    }

    function get_namin($table, $id_lokasi)
    {
        $sql = "SELECT min(na) NA_MIN FROM `$table` where lokasi=?";
		$query = $this->db->query($sql,array($id_lokasi));

		if ( $query->num_rows() <= 0 )
        {
		   return false;
		}
        return $query->row()->NA_MIN;
    }
    #

}

?>
