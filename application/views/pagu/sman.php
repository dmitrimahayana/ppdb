<div class="isi isi1">
	Data Pagu Untuk Sekolah Menengah Atas Negeri tahun 2013
</div>

<div class="isi isi1">
	<table class="table table-striped">
		<tr>
			<td><strong>Kode</strong></td>
			<td><strong>Nama Sekolah</strong></td>
			<td><strong>Awal</strong></td>
			<td><strong>Tidak Naik</strong></td>
			<td><strong>Prestasi</strong></td>
			<td><strong>Luar Kota (Rekomendasi)</strong></td>
			<td><strong>Pagu PSB</strong></td>
		</tr>
		<?php foreach ($pagu_sma as $row):?>
			<tr>
				<td><?php echo $row->id_sekolah; ?></td>
				<td><?php echo $row->nama_sekolah; ?></td>
				<td align="center"><?php echo $row->paguawal; ?></td>
				<td class="text-center"><?php echo $row->jml_tidak_naik; ?></td>
				<td class="text-center"><?php echo $row->jml_prestasi; ?></td>
				<td align="center"><?php echo $row->pagurekom; ?></td>
				<td class="text-center"><?php echo $row->pagupsb; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
