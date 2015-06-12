<div class="isi isi1">
    <?php if ($detail_tabel->num_rows() > 0){?>
        <blockquote style="background-color:white;">
            <h2><strong>Peserta dengan id <?php echo $no_ujian; ?> telah Terdaftar</strong></h2>
                
                <?php foreach($detail_tabel->result() as $row): ?>
                    <br>
                    <p>Detail Pendaftaran</p>

                        <table class="table">
                            <tr>
                                <td>No. Ujian</td>
                                <td> <?php echo $row->NO_UJIAN; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Peserta</td>
                                <td>  <?php echo $row->NAMA; ?></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td> <?php echo $row->ASAL_SEKOLAH; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td> <?php echo $row->TGL_LAHIR; ?></td>
                            </tr>
                            <tr>
                                <td>Pilihan 1</td>
                                <td>  <?php echo $row->PILIH1; ?> |  <?php echo $this->sekolah_model->get_nama_sekolah($row->PILIH1); ?> |  <?php echo $this->sekolah_model->get_nama_jurusan($row->PILIH1); ?>  </td>
                            </tr>
                            <tr>
                                <td>Pilihan 2</td>
    	                    <td>  <?php echo $row->PILIH2; ?> |  <?php echo $this->sekolah_model->get_nama_sekolah($row->PILIH2); ?> |  <?php echo $this->sekolah_model->get_nama_jurusan($row->PILIH2); ?> 
                               </td>
                            </tr>
                        </table> 	
                            <br/>
                              <a href="<?php echo site_url()?>/seleksi1"> Lihat Perankingan </a>
                <?php endforeach;?>
            <?php } else { ?>
                <div><h2><strong>Peserta dengan id <?php echo $no_ujian; ?> belum mendaftar</strong></h2></div>
                <?php } ?>
        </blockquote>        
</div>