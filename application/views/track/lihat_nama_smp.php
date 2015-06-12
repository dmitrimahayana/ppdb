<div class="isi isi1">
	Pencarian nama siswa dengan kata kunci <?php echo $nama;?> ditemukan <?php echo $total ?> nama.
</div>

<div class="isi isi1">
	<table class="table table-striped">
		<tr>
			<td><strong>No</strong></td>
			<td><strong>No.Ujian</strong></td>
			<td><strong>Nama Siswa</strong></td>
			<td><strong>Nilai</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>Status</strong></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>BIND</strong></td>
			<td><strong>MAT</strong></td>
			<td><strong>IPA</strong></td>
			<td><strong>NUN ASLI</strong></td>
			<td></td>
		</tr>
		<?php $no = 1; foreach($query->result() as $row) : ?>
			<tr>
				<td align="center"><?php echo $no++.'.'; ?></td>
				<td><?php echo $row->NO_UJIAN; ?></td>
				<td><?php echo $row->NAMA; ?></td>
				<td><?php echo $row->BIND; ?></td>
				<td><?php echo $row->MAT; ?></td>
				<td><?php echo $row->IPA; ?></td>
				<td><?php echo $row->NUN_ASLI; ?></td>
				<td><?php echo anchor('track/status/'.$tingkat.'/'.$row->NO_UJIAN, 'lihat status &raquo;') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>