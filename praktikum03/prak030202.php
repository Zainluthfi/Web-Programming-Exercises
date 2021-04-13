<?php 
function totaldenda($haruskembali,$kembali){

	$pecah1 = explode("-", $haruskembali);
	$date1 = $pecah1[2];
	$month1 = $pecah1[1];
	$year1 = $pecah1[0];
	 
	// memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
	// dari tanggal kedua
	 
	$pecah2 = explode("-", $kembali);
	$date2 = $pecah2[2];
	$month2 = $pecah2[1];
	$year2 =  $pecah2[0];
	 
	// menghitung JDN dari masing-masing tanggal
	 
	$jd1 = GregorianToJD($month1, $date1, $year1);
	$jd2 = GregorianToJD($month2, $date2, $year2);
	 
	// hitung selisih hari kedua tanggal
	 
	$selisih = $jd2 - $jd1;
	$denda = ($jd2 - $jd1) * 3000;
	return $denda;
	 
}

echo "Besarnya denda adalah: Rp".totaldenda("2021-01-03", "2021-01-05");
 ?>