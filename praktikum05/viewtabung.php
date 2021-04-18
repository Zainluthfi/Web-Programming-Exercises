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

$namaFile = "datatabung.dat";
$myFile = fopen($namaFile, "r") or die("DATA TIDAK DITEMUKAN!!");

echo "<h1>DATA UKURAN TABUNG</h1>";
echo "<center><br>";
echo "<table border='1'>";
echo("<tr>
        <th>Nama Tabung</th>
        <th>Diameter</th>
        <th>Tiggi</th>
        <th>Luas</th>
    <tr>");


while (!feof($myFile)){
    echo("<tr>");
    $datatbng = explode(",", fgets($myFile));
    $link = "http://localhost/a/praktikum05/hitungluas.php?namatabung=$datatbng[0]&diameter=$datatbng[1]&tinggi=$datatbng[2]";
    echo("
        <td>$datatbng[0]</td>
        <td>$datatbng[1]</td>
        <td>$datatbng[2]</td>
        <td><a href=$link target='_blank'>view</a></td>
        ");
    echo("</tr>");
}
echo ("</table>");
fclose($myFile);
?>