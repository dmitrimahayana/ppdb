<?php $this->load->helper('tglposisi_helper'); ?>
	<div class="isi isi1">
		<legend>Nomor Ujian Nasional</legend>
		<form method="GET" action="<?php echo site_url('pendaftar/smknnodaf') ?>" class="form-inline" style>
		    <div class="control-group">
		    	<div class="controls">
		    		<input type="text" name="no_pendaftaran" id="no_pendaftaran" placeholder="nomor UN">
		    		<button type="submit" class="btn"> Cek &raquo;</button>
		    	</div>
		    </div>
		</form>
	</div>


	<div class="isi isi1">
		<?php foreach ($query_datasiswa->result() as $row): ?>
			<blockquote class="putih">
				<legend>Info Calon Siswa SMA Negeri</legend>
				<dl>
					<dt><img src="<?php echo $this->config->item('base_url')?>static/img/faceless.gif" /></dt>
				</dl>
			</blockquote>
				
			<blockquote class="putih">
				<legend>Biodata Siswa</legend>
				<dl>
					<dt>Nama :</dt>
					<dd><?php echo $row->NAMA;?></dd>
					<dt>Tanggal Lahir :</dt>
					<dd><?php 
						$date = date_create($row->TGL_LAHIR);
						echo date_format($date, 'd/m/Y'); ?>
					</dd>
					<dt>Asal Sekolah :</dt>
					<dd><?php echo $row->ASAL_SEKOLAH?></dd>

				</dl>
			</blockquote>
			<blockquote class="putih">
				<legend>Nilai Akhir</legend>
				<dl>
					<dt>Bahasa Indonesia :</dt>
					<dd><?php echo $row->BIND ?></dd>
					<dt>Bahasa Inggris :</dt>
					<dd><?php echo $row->BING ?></dd>
					<dt>Matematika:</dt>
					<dd><?php echo $row->MAT ?></dd>
					<dt>Ilmu Pengetahuan Alam</dt>
					<dd><?php echo $row->IPA ?></dd>
					<dt>Nilai UN</dt>
					<dd><?php echo $row->NUN_ASLI ?></dd>
					<dt>Nilai Psikotes</dt>
					<dd><?php echo $row->NILAI_PSIKOTES ?></dd>
					<dt>Nilai Wawancara</dt>
					<dd><?php echo $row->NILAI_WAWANCARA ?></dd>
					<dt>&nbsp;</dt>
					<dd>&nbsp;</dd>
					<dt><b>Nilai Terpadu</b></dt>
					<dd><b><?php echo $row->NILAI_AKHIR ?></b></dd>
				</dl>
			</blockquote>
			<blockquote class="putih">
				<legend>Pilihan Sekolah</legend>
				<dl>
					<dt>No.UASBN</dt>
					<dd><?php echo $row->NO_UJIAN?></dd>
					<dt>Pilihan Ke-1</dt>
					<dd> <?php echo $query_arraysmk[$row->PILIH1] ?> (<?php echo $row->PILIH1 ?>)</dd>
					<dt>Pilihan Ke-2</dt>
					<?php if ($row->PILIH2 > 0) { ?>
					<dd> <?php echo $query_arraysmk[$row->PILIH2] ?> (<?php echo $row->PILIH2 ?>)</dd>
					<?php } else {?>
					<dd>Tidak Memilih</dd>
					<?php } ?>
				</dl>
			</blockquote>
			<blockquote class="putih">
				<legend>Hasil 
					<?php if( strtotime(date("d F Y")) >= tanggal_final_1() ) : ?>
						Final
					<?php else : ?>
						Sementara
					<?php endif; ?>
				</legend>
				<dl>
					<?php if ($row->DITERIMA== 0): ?>
                                            <dd>&nbsp;</dd>
                                            <dt>* Calon Siswa tidak diterima !</dt>
					<?php else: ?>
        				<dt>Diterima di</dt>
					<?php  if ($tahap==1): ?>
                                            <dd><?php echo $this->sekolah_model->get_nama_sekolah( $row->DITERIMA); ?> (<?php echo $row->DITERIMA ?>)</dd>
                                            <dt>No Urut Rangking</dt>
                                            <dd><?php echo $row->NO_URUT?> Pada <b><?php echo sementara_final_1();?></b></dd>
					<?php endif; ?>
					<?php if ($tahap==2):  ?>
                                            <dd> <?php echo $this->sekolah_model->get_nama_sekolah( $row->DITERIMA); ?>(<?php echo $row->DITERIMA ?>)</dd>
                                            <dt>No Urut Rangking</dt>
                                            <dd><?php echo $row->NO_URUT ?> <!--Pada <b><?php echo sementara_final_2();?></b>--></dd>
					<?php endif; ?>
					<?php endif; ?>
			</blockquote>
				</dl>
			<div class="message-box alert">
				<?php if( strtotime(date("d F Y")) >= tanggal_final_1() ) : ?>
					<p class="text-right"><strong>HASIL INI MERUPAKAN HASIL PERANKINGAN SELEKSI PPDB SIDOARJO FINAL TAHAP I</strong></p>
				<?php else : ?>
					<p class="text-right"><strong>HASIL INI MERUPAKAN HASIL PERANKINGAN SELEKSI PPDB SIDOARJO SEMENTARA TAHAP I</strong></p>
				<?php endif; ?>
            </div>

		<?php endforeach;?>
	</div>