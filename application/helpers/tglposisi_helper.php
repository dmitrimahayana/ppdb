<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('tanggal_final_1')){
	function tanggal_final_1(){
		return strtotime("2 July 2013");
	}
}

if ( ! function_exists('tanggal_final_2')){
	function tanggal_final_2(){
		return strtotime("5 July 2013");
	}
}

if ( ! function_exists('tanggal_posisi_1')){
	function tanggal_posisi_1() {
		$sekarang = strtotime(date("d F Y"));
		$final = tanggal_final_1();
		if ($sekarang >= $final) {
			$sekarang_string = date("d F Y", $final);
		}else{
			$sekarang_string = date("d F Y", $sekarang);
		}
		return $sekarang_string;
	}
}

if ( ! function_exists('tanggal_posisi_2')){
	function tanggal_posisi_2() {
		return date("d F Y", tanggal_final_2());
	}
}

if ( ! function_exists('sementara_final_1')){
	function sementara_final_1(){
		$sekarang = strtotime(date("d F Y"));
		$final = tanggal_final_1();
		
		if ($sekarang >= $final) {
			$str = "POSISI FINAL TAHAP I";
		}else{
			$str = "POSISI RANKING SEMENTARA TAHAP I";
		}
		return $str;
	}
}

if ( ! function_exists('sementara_final_2')){
	function sementara_final_2(){
		$sekarang = strtotime(date("d F Y"));
		$final = tanggal_final_2();
		
		if ($sekarang >= $final) {
			$str = "POSISI FINAL TAHAP II";
		}else{
			$str = "POSISI RANKING SEMENTARA TAHAP II";
		}
		return $str;
	}
}
?>
