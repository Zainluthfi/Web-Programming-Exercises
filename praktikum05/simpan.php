<?php
$namaFile = "mahasiswa.dat";
$myFile = fopen($namaFile, "a") or die("DATA TIDAK DITEMUKAN!!");
$nimn = $_POST['nim'];
$naman = $_POST['nama'];
$tgllhrn = $_POST['tgllhr'];
$tmplhrn = $_POST['tmptlhr'];
fwrite($myFile, "\n".$nimn."|".$naman."|".$tgllhrn."|".$tmplhrn."");
fclose($myFile);
echo "berhasil diinput";