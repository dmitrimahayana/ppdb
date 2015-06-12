<body>
<div style="width:980px;margin:50px auto 0px auto;">
	<div style="margin-top:50px;">
		<div class="form-actions" style="border-top:2px solid;border-color:#3FB618;background-color:white;">
			<!--<h1 class="text-center" style="color:white;">
				<strong>PPDB Sidoarjo 2013</strong>
			</h1>-->
			<a style="float:left;" href="<?php echo site_url()?>">
				<img src="<?php echo base_url(); ?>static/img/logo_2.png"/>
			</a>
			
			<a style="float:right;" href="http://www.dispendiksidoarjo.net">
				<img src="<?php echo base_url(); ?>static/img/diknas.png"/>
			</a>
		</div>
		<div class="form-actions" style="border-top:2px solid;border-color:#3FB618;background-color:white;">
			<h4 class="text-center" style="color:black;">
				Selamat datang di situs Penerimaan Peserta Didik Baru Dinas Pendidikan Kabupaten Sidoarjo periode <?php echo get_tahun('ta') ?>. 
				Situs ini dipersiapkan sebagai pusat informasi dan pengolahan seleksi data siswa peserta PPDB periode <?php echo get_tahun('now') ?> secara online. 
				Informasi seputar pelaksanaan PPDB akan di update di situs ini.
				<br>
				<br>
				Demikian informasinya, dan terima kasih atas perhatian dan kerjasamanya. 
				Semoga pelaksanaan Penerimaan Peserta Didik Baru di Kabupaten Sidoarjo terlaksana dengan baik.
				<br>
				<br>
				Selamat mengikuti PPDB <?php echo get_tahun('now') ?> dan semoga dapat diterima di sekolah yang dicita-citakan.
			</h4>
		</div>
		<div class="form-actions" align="center" style="border-top:2px solid;border-color:#3FB618;background-color:white;">
			<button class="btn btn-primary" style="width:80%" onclick="location.href='<?php echo site_url('beranda/index/mekanisme-ketentuan')?>'">
				Mekanisme dan Ketentuan <i class="icon-info-sign icon-white"></i>
			</button>
			<!--<button class="btn btn-primary" onclick="location.href='<?php echo site_url('beranda/index/umum')?>'">
				Beranda <i class="icon-home icon-white"></i>
			</button>
			<button class="btn btn-primary" onclick="location.href='<?php echo site_url('sekolah/beranda')?>'">
				Sekolah <i class="icon-list icon-white"></i>
			</button>
			<button class="btn btn-primary" onclick="location.href='<?php echo site_url('pagu/beranda')?>'">
				Pagu <i class="icon-list icon-white"></i>
			</button>
			<button class="btn btn-primary" onclick="location.href='<?php echo site_url('track/index/main')?>'">
				Info Pendaftar <i class="icon-info-sign icon-white"></i>
			</button>
			<button class="btn btn-primary" onclick="location.href='<?php echo site_url('seleksi1')?>'">
				Hasil Seleksi <i class="icon-file icon-white"></i>
			</button>
			<button class="btn btn-primary" onclick="location.href='<?php echo site_url('rekapitulasi/index/main')?>'">
				Rekapitulasi <i class="icon-book icon-white"></i>
			</button>
			<button class="btn btn-primary" onclick="location.href='<?php echo site_url('pdf/index')?>'">
				Cetak PDF <i class="icon-book icon-white"></i>
			</button> -->
		</div>
	</div>
</div>
</body>	