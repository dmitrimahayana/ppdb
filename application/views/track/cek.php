<div class="isi isi1">
	Halaman ini memberikan informasi status pendaftaran peserta PPDB Kabupaten Sidoarjo 2012, diantaranya :
	<ul>
		<li>Peserta belum melakukan proses input data</li>
		<li>Data peserta sudah di ranking</li>
	</ul>
</div>

<div class="isi isi1">
	<h2 class="text-right">
		Cek Pendaftaran
		<br>
		SMP & SMA
	</h2>
	<form method="GET" action="<?php echo site_url('track/hasil') ?>" class="form-horizontal">
	    <div class="control-group">
	    	<label class="control-label" for="inputEmail">Masukkan</label>
	    	<div class="controls">
	    		<input type="text" name="no_ujian" id="no_ujian" placeholder="nomor ujian" >
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputPassword">atau</label>
	    	<div class="controls">
	    		<input type="text" name="nama" id="nama" placeholder="nama siswa">
	    	</div>
	    </div>
	    <div class="control-group">
	    	<label class="control-label" for="inputPassword">dan</label>
	    	<div class="controls">
	    		<select type="jenjang" id="jenjang" name="tingkat">
	    			<option value="">--pilih jenjang pendidikan--</option>
	    			<option value="smp">Jenjang Pendidikan SMP</option>
	    			<option value="sma">Jenjang Pendidikan SMA</option>
	    		</select>
	    	</div>
	    </div>
	    <div class="control-group">
	    	<div class="controls">
	    		<button type="submit" class="btn btn-primary">Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
</div>
<div class="isi isi1">
	<h2 class="text-right">
		Cek Pendaftaran
		<br>
		SMK
	</h2>
	<form method="GET" action="<?php echo site_url('track/hasil_smk') ?>" class="form-horizontal">
	    <div class="control-group">
	    	<label class="control-label" for="nomor">masukkan no. ujian</label>
	    	<div class="controls">
	    		<input type="text" name="no_ujian" id="no_ujian" placeholder="nomor ujian">
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<form method="GET" action="<?php echo site_url('track/hasil_smk_') ?>" class="form-horizontal">
	    <div class="control-group">
	    	<label class="control-label" for="nomor">masukkan nama peserta</label>
	    	<div class="controls">
	    		<input type="text" name="nama" id="nama" placeholder="nama peserta">
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
</div>