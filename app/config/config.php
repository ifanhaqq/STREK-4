<?php

define('BASEURL', 'http://localhost/STREK-4');

//DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'strek');

function get_bulan($bln) {
	switch ($bln) {
			case '1' :
				return "Januari";
			case '2' :
				return "Februari";
			case '3' :
				return "Maret";
			case '4' :
				return "April";
			case '5' :
				return "Mei";
			case '6' :
				return "Juni";
			case '7' :
				return "Juli";
			case '8' :
				return "Agustus";
			case '9' :
				return "September";
			case '10' :
				return "Oktober";
			case '11' :
				return "November";
			case '12' :
				return "Desember";
	}
}
function tgljm_full($tgl) {
	$tanggal = date("j", strtotime($tgl));
	$bulan = get_bulan(date("n", strtotime($tgl)));
	$tahun = date("Y", strtotime($tgl));
	$jam = date("H", strtotime($tgl));
	$menit = date("i", strtotime($tgl));
	return $tanggal.' '.$bulan.' '.$tahun.', '.$jam.':'.$menit;
}