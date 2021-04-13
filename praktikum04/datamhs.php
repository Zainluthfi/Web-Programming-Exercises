<?php
echo "<style>
    h1 {
        text-align:center;
    }
    th {
        font-size: 20px;
         text-align:center;
    }
    td{
        font-size: 20px;
         text-align:center;
    }
</style>
";

$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "r") or die("DATA TIDAK DITEMUKAN!!");

echo "<h1>DATA MAHASISWA</h1>";
echo "Jumlah data : ".count(file($namaFile));

$kalender = explode("-", date("Y-m-d"));
$tanggal = $kalender[2];
$bulan = $kalender[1];
$tahun = $kalender[0];
$jd2 = gregoriantojd($bulan, $tanggal, $tahun);

function umur(String $kalenderLahir, $jd2){
    $kalenderLahir = explode("-", $kalenderLahir);
    $tanggalLahir = $kalenderLahir[2];
    $bulanLahir = $kalenderLahir[1];
    $tahunLahir = $kalenderLahir[0];
    $jd1 = gregoriantojd($bulanLahir, $tanggalLahir, $tahunLahir);
    $umur = intval(($jd2 - $jd1) / 365);
    return $umur;
}

echo "<center><br>";
echo "<table border='1'>";
echo("<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mhs</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Usia (Thn)</th>
    <tr>");
$no = 1;

while (!feof($myFile)){
    echo("<tr>");
    $datamhs = explode("|", fgets($myFile));

    if ($datamhs[0] != ''){
        $usia = umur($datamhs[2], $jd2);
        echo("
            <td>$no</td>
            <td>$datamhs[0]</td>
            <td>$datamhs[1]</td>
            <td>$datamhs[2]</td>
            <td>$datamhs[3]</td>
            <td>$usia</td>");
        $no++;
    }
    echo("</tr>");
}
echo "</table>";
echo "</center>";

fclose($myFile);

?>