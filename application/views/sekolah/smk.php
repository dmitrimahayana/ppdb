				<div class="isi isi1">
					Sekolah Menengah Kejuruan Negeri yang terdaftar di Kabupaten Sidoarjo Tahun Ajaran 2013/2014 adalah sebagai berikut:
				</div>
				<div class="isi isi1">
					<table class="table table1">
						<tr>
							<td><strong>Kode</strong></td>
							<td><strong>Nama Sekolah</strong></td>
							<td><strong>Alamat</strong></td>
							<td><strong>Telepon</strong></td>
						</tr>
						<?php foreach ($sekolah_smk as $row):?>
						<tr>
							<td><?php echo $row->id_sekolah; ?></td>
							<td><?php echo $row->nama_sekolah; ?></td>
							<td><?php echo $row->alamat_sekolah; ?></td>
							<td><?php echo $row->telpon; ?></td>
						</tr>
					<?php endforeach; ?>
						
					</table>
				</div>	
			</div>