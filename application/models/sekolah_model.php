<?php
class Sekolah_model extends CI_Model{
    function __construct(){
		parent::__construct();
		$this->load->database();
    }

    function get_smp(){
        return $this->db->select('id_sekolah, nama_sekolah, alamat_sekolah, telpon')
             ->where('id_sekolah >', 1)
             ->where('id_sekolah <', 45)
             ->get('sekolah')
             ->result();
	}

    function get_smp_(){
        $sql="select `id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `telpon` from `sekolah` 
        where `id_sekolah` between 2 and 44 order by `id_sekolah`;";
        $query = $this->db->query($sql);
        return $query;
    }

	function get_sma(){
        return $this->db->select('id_sekolah, nama_sekolah, alamat_sekolah, telpon')
             ->where('id_sekolah >', 51)
             ->where('id_sekolah <', 62)
             ->get('sekolah')
             ->result();
	}

	function get_smk(){
        $sql="select distinct left(`id_sekolah`,2) `id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `telpon`
		from `sekolah` where `id_sekolah` between 7101 and 7506;";
        $query = $this->db->query($sql);
        return $query->result();
	}

    function get_smk_seleksi1(){
        $sql="
            select
                `id_sekolah`, `nama_sekolah`, `jurusan`
            from
                `pagu_sekolah`
            where
                `id_sekolah` between 7101 and 7506
            order by
                `id_sekolah`
            ";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_nama_sekolah($id_sekolah){
       if($id_sekolah>0)
    {
         $sql="
            SELECT
                `NAMA_SEKOLAH`
            FROM
                `sekolah`
            WHERE
                `ID_SEKOLAH` = $id_sekolah
            ";

        $query = $this->db->query($sql);


        if ( $query->num_rows() <= 0 ) {
           return false;
        }
        return $query->row()->NAMA_SEKOLAH;
    }
    
    }

    function get_nama_sekolah_($id_sekolah){
        $sql="
            SELECT
                `NAMA_SEKOLAH`
            FROM
                `sekolah`
            WHERE
                `ID_SEKOLAH` = $id_sekolah
            ";

        $query = $this->db->query($sql);


        if ( $query->num_rows() <= 0 ){
           return false;
        }
        return $query->row()->NAMA_SEKOLAH;
    }
    
    function get_nama_jurusan($id_sekolah){
        $sql="
            SELECT
                `JURUSAN`
            FROM
                `pagu_sekolah`
            WHERE
                `ID_SEKOLAH` = ?
            ";

        $query = $this->db->query($sql,array($id_sekolah));


        if ( $query->num_rows() <= 0 ){
           return false;
        }
        return $query->row()->JURUSAN;
    }

    function get_array_smp(){
        $data[0]="Tidak Memilih";
        $data[-2]="Gagal";

        $sql="
            SELECT
                `ID_SEKOLAH`,
                `NAMA_SEKOLAH`
            FROM
                `pagu_sekolah`
            WHERE
                `ID_SEKOLAH` between 2 and 44
            ORDER BY
                `ID_SEKOLAH`
            ";
        $query = $this->db->query($sql);

        foreach($query->result() as $row ):
            $data[$row->ID_SEKOLAH] = $row->NAMA_SEKOLAH;
        endforeach;
        return $data;
    }

    function get_array_smp_(){
        $data[0]="Tidak Memilih";
        $data[-2]="Gagal";

        $sql="
            SELECT
                `ID_SEKOLAH`,
                `NAMA_SEKOLAH`
            FROM
                `sekolah`
            WHERE
                `ID_SEKOLAH` between 2 and 44
            ORDER BY
                `ID_SEKOLAH`
            ";
        $query = $this->db->query($sql);

        foreach($query->result() as $row ):
            $data[$row->ID_SEKOLAH] = $row->NAMA_SEKOLAH;
        endforeach;
        return $data;
    }

    function get_array_sma(){
        $data[0]="Tidak Memilih";
        $data[-2]="Gagal";

        $sql="
            SELECT
                `ID_SEKOLAH`,
                `NAMA_SEKOLAH`
            FROM
                `pagu_sekolah`
            WHERE
                `ID_SEKOLAH` between 52 and 61
            ORDER BY
                `ID_SEKOLAH`
            ";
        $query = $this->db->query($sql);

        foreach($query->result() as $row ):
            $data[$row->ID_SEKOLAH] = $row->NAMA_SEKOLAH;
        endforeach;
        return $data;
    }

    function get_array_smk(){
        $data[0]="Tidak Memilih";
        $data[-2]="Gagal";

        $sql="
            SELECT
                distinct left(`ID_SEKOLAH`, 2) `ID_SEKOLAH`,
                `NAMA_SEKOLAH`,
                `JURUSAN`
            FROM
                `pagu_sekolah`
            WHERE
                `ID_SEKOLAH` between 7101 and 7506
            ORDER BY
                `ID_SEKOLAH`
            ";
        $query = $this->db->query($sql);

        foreach($query->result() as $row ):
            $data[$row->ID_SEKOLAH] = $row->NAMA_SEKOLAH;
        endforeach;

        $query->free_result();

        $sql="
            SELECT
                `ID_SEKOLAH` `ID_KEAHLIAN`,
                `NAMA_SEKOLAH`,
                `JURUSAN`
            FROM
                `pagu_sekolah`
            WHERE
                `ID_SEKOLAH` between 7101 and 7506
            ORDER BY
                `ID_SEKOLAH`
            ";
        $query = $this->db->query($sql);

        foreach($query->result() as $row ):
            $data[$row->ID_KEAHLIAN] = $row->JURUSAN;
        endforeach;

        return $data;
    }
}
?>
