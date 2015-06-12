<?php
class Pagu_model extends CI_Model{
    function __construct(){
		parent::__construct();
		$this->load->database();
    }

    function get_pagu_smp(){
        return $this->db->select('id_sekolah, nama_sekolah, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
             ->where('id_sekolah >', 1)
             ->where('id_sekolah <', 45)
             ->get('pagu_sekolah')
             ->result();
	}

	function get_pagu_sma(){
        return $this->db->select('id_sekolah, nama_sekolah, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
                ->where('id_sekolah >', 51)
                ->where('id_sekolah <', 62)
                ->get('pagu_sekolah')
                ->result();
	}

	function get_pagu_smk(){
        /*return $this->db->distinct('id_sekolah')
            ->select('distinct(id_sekolah, 2), nama_sekolah, pagupsb, pagu_sisa, jml_tidak_naik, jml_prestasi')
            ->where('id_sekolah >', 7100)
            ->where('id_sekolah <', 7507)
            ->get('pagu_sekolah')
            ->result();*/
        $sql="select distinct left(`id_sekolah`,2) `id_sekolah`, `nama_sekolah`, `jurusan`, `paguawal`, `jml_tidak_naik`, `jml_prestasi`, `pagurekom`, `pagupsb` from `pagu_sekolah` where `id_sekolah` between 7101 and 7506;";
        $query = $this->db->query($sql);
        return $query->result();
	}

	function get_pagu_smk_71(){
	return $this->db->select('id_sekolah, nama_sekolah, jurusan, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
		->where('id_sekolah <', 7200)
		->where('id_sekolah >', 7100)
		->get('pagu_sekolah')
		->result();
	}

	function get_pagu_smk_72(){
	return $this->db->select('id_sekolah, nama_sekolah, jurusan, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
		->where('id_sekolah <', 7300)
		->where('id_sekolah >', 7200)
		->get('pagu_sekolah')
		->result();
	}
	
	function get_pagu_smk_73(){
	return $this->db->select('id_sekolah, nama_sekolah, jurusan, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
		->where('id_sekolah <', 7400)
		->where('id_sekolah >', 7300)
		->get('pagu_sekolah')
		->result();
	}

	function get_pagu_smk_74(){
	return $this->db->select('id_sekolah, nama_sekolah, jurusan, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
		->where('id_sekolah <', 7500)
		->where('id_sekolah >', 7400)
		->get('pagu_sekolah')
		->result();
	}

	function get_pagu_smk_75(){
	return $this->db->select('id_sekolah, nama_sekolah, jurusan, paguawal, jml_tidak_naik, jml_prestasi, pagurekom, pagupsb')
		->where('id_sekolah <', 7600)
		->where('id_sekolah >', 7500)
		->get('pagu_sekolah')
		->result();
	}

}
?>
