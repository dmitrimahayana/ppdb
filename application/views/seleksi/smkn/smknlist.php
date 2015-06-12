	<div class="isi isi1">
					<blockquote class="putih">
						<legend>Lihat Hasil Seleksi Tahap I SMK</legend>
						<form method="GET" action="<?php echo site_url('seleksi1/smknlist') ?>" class="form-inline">
						    <div class="control-group">
						    	<select name="id_diterima_di" class="dinput" style="width:60%">
		                            <option value="">  # Pilihan SMK # </option>
		                            <?php foreach($query_combosmk->result() as $row): ?>
		                                <option value="<?php echo $row->id_sekolah; ?>">
		                                    &nbsp; <?php echo $row->nama_sekolah; ?> &nbsp; (<?php echo $row->id_sekolah; ?>)
		                                </option>
		                                <?php echo $row->id_sekolah; ?> -
		                            <?php endforeach;?>
								</select>
								<input type="submit" class="dbtn" name="test" value="Cek &raquo;" />
						    </div>
						</form>
					</blockquote>
	</div>

	<div class="isi isi1">
		<blockquote class="putih">
             <strong>Halaman : </strong><?php echo $this->pagination->create_links();?><br>
					<?php if( strtotime(date("d F Y")) >= tanggal_final_1() ) : ?>
					<h2>Data Hasil Seleksi Tahap I SMA di <?php echo $query_arraysmk[$id_diterima_di]; ?></h2>
					<?php else : ?>
					<b>Hasil Ranking Sementara Berdasarkan Data Masuk di <?php echo $query_arraysmk[$id_diterima_di]; ?></b>
					<?php endif; ?>
					<br />
					<br />
                    Total yang diterima : <b><?php echo $total_seleksi1; ?></b><br>
                    Nilai Akhir Maksimal :<b><?php echo $na_max; ?></b><br>
                    Nilai Akhir Minimal : <b><?php echo $na_min; ?></b><br>
					
			<table class="table table-striped">
				<thead>
				<tr>
					<th><b>No Urut</th>
					<th><b>No Ujian</th>
	                                
					<th><b>Nama Siswa</b></th>
					<th><b>Asal Sekolah</b></th>
					<th><b>Nilai Terpadu</b></th>
				<tr>
				</thead>
				<tbody>
				<?php foreach ($query_listseleksi1->result() as $row): ?>	
				<?php $num++; ?>
				<tr>
					<td><?php echo $row->NO_URUT; ?></td>
					<td><?php echo $row->NO_UJIAN; ?></td>
	                                
	                                <td><a href="<?php echo site_url().'/pendaftar/smannodaf/'. $row->NO_UJIAN; ?>">
						<?php echo $row->NAMA; ?>
	                            </a></td>
					<td><?php echo $row->ASAL_SEKOLAH; ?></td>
					<td><?php echo $row->NILAI_AKHIR; ?></td>
				</tr>
				<?php endforeach; ?>
				</tbody>
				</table>
		</blockquote>
	</div>