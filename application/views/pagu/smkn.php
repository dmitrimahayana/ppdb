<div class="isi isi1">
	Data Pagu Untuk Sekolah Menengah Kejuruan Negeri tahun 2013
</div>

<div class="isi isi1">
	<table class="table table-striped">
		<tr>
			<td><strong>Kode</strong></td>
			<td><strong>Nama Sekolah</strong></td>
			<td><strong>Jurusan</strong></td>
			<td><strong>Awal</strong></td>
			<td><strong>Tidak Naik</strong></td>
			<td><strong>Prestasi</strong></td>
			<td><strong>Luar Kota (Rekomendasi)</strong></td>
			<td><strong>Pagu PSB</strong></td>
		</tr>
		
		<?php 
		$count=0;
		$count=$count+1;
		foreach ($smk_71 as $row):?>
			<tr>
				<?php if ($count==1):?>
				<td><?php $string = $row->id_sekolah; echo substr($string,0,2); ?></td>
				<td><?php echo $row->nama_sekolah; ?></td>
				<?php $count = $count+1; else : ?>
				<td></td>
				<td></td>
				<?php endif; ?>
				<td><?php echo $row->jurusan; ?></td>
				<td align="center"><?php echo $row->paguawal; ?></td>
				<td class="text-center"><?php echo $row->jml_tidak_naik; ?></td>
				<td class="text-center"><?php echo $row->jml_prestasi; ?></td>
				<td align="center"><?php echo $row->pagurekom; ?></td>
				<td class="text-center"><?php echo $row->pagupsb; ?></td>
			</tr>
		<?php endforeach; ?>
		
		<?php 
		$count=0;
		$count=$count+1;
		foreach ($smk_72 as $row):?>
			<tr>
				<?php if ($count==1):?>
				<td><?php $string = $row->id_sekolah; echo substr($string,0,2); ?></td>
				<td><?php echo $row->nama_sekolah; ?></td>
				<?php $count = $count+1; else : ?>
				<td></td>
				<td></td>
				<?php endif; ?>
				<td><?php echo $row->jurusan; ?></td>
				<td align="center"><?php echo $row->paguawal; ?></td>
				<td class="text-center"><?php echo $row->jml_tidak_naik; ?></td>
				<td class="text-center"><?php echo $row->jml_prestasi; ?></td>
				<td align="center"><?php echo $row->pagurekom; ?></td>
				<td class="text-center"><?php echo $row->pagupsb; ?></td>
			</tr>
		<?php endforeach; ?>

		<?php 
		$count=0;
		$count=$count+1;
		foreach ($smk_73 as $row):?>
			<tr>
				<?php if ($count==1):?>
				<td><?php $string = $row->id_sekolah; echo substr($string,0,2); ?></td>
				<td><?php echo $row->nama_sekolah; ?></td>
				<?php $count = $count+1; else : ?>
				<td></td>
				<td></td>
				<?php endif; ?>
				<td><?php echo $row->jurusan; ?></td>
				<td align="center"><?php echo $row->paguawal; ?></td>
				<td class="text-center"><?php echo $row->jml_tidak_naik; ?></td>
				<td class="text-center"><?php echo $row->jml_prestasi; ?></td>
				<td align="center"><?php echo $row->pagurekom; ?></td>
				<td class="text-center"><?php echo $row->pagupsb; ?></td>
			</tr>
		<?php endforeach; ?>

		<?php 
		$count=0;
		$count=$count+1;
		foreach ($smk_74 as $row):?>
			<tr>
				<?php if ($count==1):?>
				<td><?php $string = $row->id_sekolah; echo substr($string,0,2); ?></td>
				<td><?php echo $row->nama_sekolah; ?></td>
				<?php $count = $count+1; else : ?>
				<td></td>
				<td></td>
				<?php endif; ?>
				<td><?php echo $row->jurusan; ?></td>
				<td align="center"><?php echo $row->paguawal; ?></td>
				<td class="text-center"><?php echo $row->jml_tidak_naik; ?></td>
				<td class="text-center"><?php echo $row->jml_prestasi; ?></td>
				<td align="center"><?php echo $row->pagurekom; ?></td>
				<td class="text-center"><?php echo $row->pagupsb; ?></td>
			</tr>
		<?php endforeach; ?>

		<?php 
		$count=0;
		$count=$count+1;
		foreach ($smk_75 as $row):?>
			<tr>
				<?php if ($count==1):?>
				<td><?php $string = $row->id_sekolah; echo substr($string,0,2); ?></td>
				<td><?php echo $row->nama_sekolah; ?></td>
				<?php $count = $count+1; else : ?>
				<td></td>
				<td></td>
				<?php endif; ?>
				<td><?php echo $row->jurusan; ?></td>
				<td align="center"><?php echo $row->paguawal; ?></td>
				<td class="text-center"><?php echo $row->jml_tidak_naik; ?></td>
				<td class="text-center"><?php echo $row->jml_prestasi; ?></td>
				<td align="center"><?php echo $row->pagurekom; ?></td>
				<td class="text-center"><?php echo $row->pagupsb; ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>
