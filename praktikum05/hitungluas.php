<?php
$rumus = 22/7;
$namaTabungn = $_GET['namatabung'];
$diametern = $_GET['diameter'];
$tinggin = $_GET['tinggi'];
$luasSelimut = ($rumus * $diametern) * $tinggin;
$luasLingkaran = ($rumus * ($diametern ** 2)) / 4;
$luasTabung = round($luasSelimut + $luasLingkaran, 2);
echo ("Luas tabung $namaTabungn dengan diameter $diametern dan tinggi $tinggin adalah $luasTabung satuan luas");
?>