bacafile2.php

<?php
$namaFile = "myfile.txt";
$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
while(!feof($myfile)) {
  echo fgets($myfile);
}
fclose($myfile);
?>
