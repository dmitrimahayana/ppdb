<?php
	/* get_tahun() mendapatkan tahun sekarang terdiri dari
	   now	: tahun sekarang
	   ta	: tahun ajaran sekarang
	*/
	function get_tahun($opt) {

		$year = date('Y');
		if ($opt == 'now') {
		    return $year;
		}elseif ($opt == 'ta') {
		    $y = $year+1;
		    return $year.'/'.$y;
		}else {
		    return 0;
		}

	}
?> 