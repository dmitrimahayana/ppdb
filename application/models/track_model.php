<?php
class Track_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_peserta($tbl_pendaftar, $no_ujian){
		$sql = "select * from `" . $tbl_pendaftar . "` where `NO_UJIAN` = " . $no_ujian . ";";
		$q = $this->db->query($sql);
		//$q = $this->db->where($tbl_pendaftar, array('NO_UJIAN' => $no_ujian));
		return $q->row();
	}
	
	public function cari($tbl_pendaftar, $tbl_un, $no_ujian){
		/*
			return value
			-1	: sudah divalidasi, salah			x canceled
			0	: sudah input, menunggu validasi
			1	: sudah divalidasi, benar			x canceled
			2	: belum input
			3	:
			4	: not found
		*/
		$sql = "select * from `" . $tbl_pendaftar . "` where `NO_UJIAN` = " . $no_ujian . ";";
		$q = $this->db->query($sql);
		//$q = $this->db->where('NO_UJIAN' ,$no_ujian);
		$n = $q->num_rows;
		
		if($n == 0){
			$sql = "select * from `" . $tbl_pendaftar . "` where `NO_UJIAN` = " . $no_ujian . ";";
			$query = $this->db->query($sql);
			//$query = $this->db->where($tbl_un, array('NO_UJIAN' => $no_ujian));
			$num = $query->num_rows();
	
			if($num == 1)	return 2;
			else			return 4;
		}else{
			//$n = $q->row();
			//return $n->SYNCH_FLAG;
			return 0;
		}
	}
	
	
	public function cari_nama($tbl_pendaftar, $nama){
		$this->db->like('NAMA', $nama);
		return $this->db->get($tbl_pendaftar);
		
	}
	
	public function total_cari_nama($tbl_pendaftar, $nama){
		$q = $this->cari_nama($tbl_pendaftar, $nama);
		return $q->num_rows();
		
	}
}
?>