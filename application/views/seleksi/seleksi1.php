<div class="isi isi1">
	<blockquote style="background-color:white;">
	<h2><strong>SMP Negeri</strong></h2>
	<p class="lead">Lihat hasil berdasarkan Nomor UN</p>
	<form method="GET" action="<?php echo site_url('pendaftar/smpnnodaf') ?>" class="form-horizontal" style>
	    <div class="control-group">
	    	<label class="control-label" for="no_pendaftaran">nomor UN </label>
	    	<div class="controls">
	    		<input type="text" name="no_pendaftaran" id="no_pendaftaran" placeholder="nomor UN">
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<p class="lead">Lihat hasil berdasarkan Sekolah</p>
	<form method="GET" action="<?php echo site_url('seleksi1/smpnlist') ?>" class="form-horizontal" style="margin-top:20px;">
	    <div class="control-group">
	    	<label class="control-label" for="nomor">Sekolah</label>
	    	<div class="controls">
	    		<select name="id_diterima_di" class="dinput" style="width:60%">
				  	<option value="">  # Pilihan SMP # </option>
	                    <?php foreach($query_combosmp_->result() as $row): ?>
	                        <option value="<?php echo $row->id_sekolah; ?>">
	                            &nbsp; <?php echo $row->nama_sekolah; ?> &nbsp; (<?php echo $row->id_sekolah; ?>)
	                        </option>
	                    <?php echo $row->id_sekolah; ?> -
	                    <?php endforeach;?>
				</select>
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<br>
	<br>
	<p class="text-right">HASIL INI MERUPAKAN HASIL PERANKINGAN SELEKSI PPDB SIDOARJO FINAL TAHAP I</p>
	</blockquote>
</div>
<div class="isi isi1">
	<blockquote style="background-color:white;">
	<h2><strong>SMA Negeri</strong></h2>
	<p class="lead">Lihat hasil berdasarkan Nomor UN</p>
	<form method="GET" action="<?php echo site_url('pendaftar/smannodaf') ?>" class="form-horizontal" style>
	    <div class="control-group">
	    	<label class="control-label" for="no_pendaftaran">nomor UN </label>
	    	<div class="controls">
	    		<input type="text" name="no_pendaftaran" id="no_pendaftaran" placeholder="nomor UN">
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<p class="lead">Lihat hasil berdasarkan Sekolah</p>
	<form method="GET" action="<?php echo site_url('seleksi1/smanlist') ?>" class="form-horizontal" style="margin-top:20px;">
	    <div class="control-group">
	    	<label class="control-label" for="nomor">Sekolah</label>
	    	<div class="controls">
	    		<select name="id_diterima_di" class="dinput" style="width:60%">
				  	<option value="">  # Pilihan SMA # </option>
	                    <?php foreach($query_combosma->result() as $row): ?>
	                        <option value="<?php echo $row->id_sekolah; ?>">
	                            &nbsp; <?php echo $row->nama_sekolah; ?> &nbsp; (<?php echo $row->id_sekolah; ?>)
	                        </option>
	                    <?php echo $row->id_sekolah; ?> -
	                    <?php endforeach;?>
				</select>
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<br>
	<br>
	<p class="text-right">HASIL INI MERUPAKAN HASIL PERANKINGAN SELEKSI PPDB SIDOARJO FINAL TAHAP I</p>
	</blockquote>
</div>
<div class="isi isi1">
	<blockquote style="background-color:white;">
	<h2><strong>SMK Negeri</strong></h2>
	<p class="lead">Lihat hasil berdasarkan Nomor UN</p>
	<form method="GET" action="<?php echo site_url('pendaftar/smknnodaf') ?>" class="form-horizontal" style>
	    <div class="control-group">
	    	<label class="control-label" for="no_pendaftaran">nomor UN </label>
	    	<div class="controls">
	    		<input type="text" name="no_pendaftaran" id="no_pendaftaran" placeholder="nomor UN">
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<p class="lead">Lihat hasil berdasarkan Sekolah</p>
	<form method="GET" action="<?php echo site_url('seleksi1/smknlist') ?>" class="form-horizontal" style="margin-top:20px;">
	    <div class="control-group">
	    	<label class="control-label" for="nomor">Sekolah</label>
	    	<div class="controls">
	    		<select name="id_diterima_di" class="dinput" style="width:60%">
				  	<option value="">  # Pilihan SMK # </option>
	                    <?php foreach($query_combosmk->result() as $row): ?>
	                        <option value="<?php echo $row->id_sekolah; ?>">
	                            &nbsp; <?php echo $row->nama_sekolah; ?> &nbsp; (<?php echo $row->id_sekolah; ?>)
	                        </option>
	                    <?php echo $row->id_sekolah; ?>
	                    <?php endforeach;?>
				</select>
	    		<button type="submit" class="btn"> Cek &raquo;</button>
	    	</div>
	    </div>
	</form>
	<br>
	<br>
	<p class="text-right">HASIL INI MERUPAKAN HASIL PERANKINGAN SELEKSI PPDB SIDOARJO FINAL TAHAP I</p>
	</blockquote>
</div>