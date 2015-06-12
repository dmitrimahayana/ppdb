<div class="isi isi1">
	Status Pendaftaran peserta PPDB Kabupaten Sidoarjo 2013
</div>
<div class="isi isi1">
	<?php if($query == 2) : ?>
			<div class="message-box">Peserta dengan No. Ujian <?php echo $no_ujian ?> belum melakukan proses input data<br>
			silahkan melakukan proses input terlebih dahulu</div>
		<?php elseif($query == 0) : ?>
			<div class='message-box'>
				<table border="0">
				<tr><td align="left">No. Ujian</td><td align="left">: <?php echo $no_ujian; ?></td></tr>
				<tr><td align="left">Nama Peserta</td><td align="left">: <?php echo $peserta->NAMA; ?></td></tr>
				<tr><td align="left">Pilihan 1</td><td align="left">: <?php echo $this->sekolah_model->get_nama_sekolah($peserta->PILIH1); ?></td></tr>
				<tr><td align="left">Pilihan 2</td><td align="left">: <?php if ($peserta->PILIH2 < 0) echo "Tidak memilih"; else echo $this->sekolah_model->get_nama_sekolah($peserta->PILIH2); ?></td></tr>
				<tr><td align="left">Status</td><td align="left">: <font color="blue">sudah di ranking</font></td></tr>
				<!-- <tr><td colspan="2">silahkan cek beberapa saat kembali untuk melihat status validasi pendaftaran anda</td></tr> -->
				<tr><td colspan="2">
					silahkan cek halaman <?php echo anchor('seleksi1', 'Hasil Ranking Sementara') ?> untuk melihat ranking sementara peserta
					<?php 
						if($tingkat == "smp") 		echo anchor('pendaftar_smpnnodaf/lihat/'.$no_ujian, $peserta->NAMA);
						elseif($tingkat == "sma")	echo anchor('pendaftar_smannodaf/lihat/'.$no_ujian, $peserta->NAMA);
						else	echo anchor('pendaftar_smknnodaf/lihat/'.$no_ujian, $peserta->NAMA);
					?>.
				</td></tr>
				</table>
			</div>
		<?php elseif($query == -1) : ?>
			<div class="message-box">
				<table border="0">
				<tr><td align="left">No. Ujian</td><td align="left">: <?php echo $no_ujian; ?></td></tr>
				<tr><td align="left">Nama Peserta</td><td align="left">: <?php echo $peserta->NAMA; ?></td></tr>
				<tr><td align="left">Status</td><td align="left">: <font color="red">data pendaftar sudah divalidasi, namun salah</font></td></tr>
				</table>
			</div>
		<?php else : ?>
			<div class="message-box">
				<table border="0">
				<tr><td align="left">No. Ujian</td><td align="left">: <?php echo $no_ujian; ?></td></tr>
				<tr><td align="left">Nama Peserta</td><td align="left">: <?php echo $peserta->NAMA; ?></td></tr>
				<tr><td align="left">Status</td><td align="left">: <font color="green">data pendaftar sudah divalidasi dan benar</font></td></tr>
				</table>
			</div>
		<?php endif;
			echo anchor('track/cek', '&laquo; Kembali');
		?>
</div>