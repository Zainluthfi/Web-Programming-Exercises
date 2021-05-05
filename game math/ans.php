<?php 
if ($_COOKIE['username'] == FALSE) {
  header("Location:index.php");
}
?><!DOCTYPE html>
<html>
<head>
	<title>Game Math</title>
</head>
<?php 
function jml($a, $b){
  $kunci = $a + $b;
  return $kunci;
}
$a   = $_POST['a'];
$b   = $_POST['b'];
$jawab  = $_POST['jawab'];
$c = jml($a, $b);

if ($jawab == $c) {
	$ket = "selamat jawaban anda benar";
	setcookie("score", $_COOKIE['score']+=10, time()+3*30*24*3600,"/");

}else {
	$ket = "maaf jawaban anda salah";
	setcookie("live", $_COOKIE['live']-=1, time()+3*30*24*3600,"/");
	setcookie("score", $_COOKIE['score']-=2, time()+3*30*24*3600,"/");
}
if (isset($_COOKIE['username']) && ($_COOKIE['live'] > 0 )){ 
?>
<body>
<form>
  <p>Hallo <i><?php echo $_COOKIE['username']?></i>, <?php echo $ket?></p>
  <p>Jawaban kamu <?php echo $jawab?></p>
  <p>Live : <u><?php echo $_COOKIE['live']?></u> | Score : <u><?php echo $_COOKIE['score'] ?></u></p>
  <a href="proses.php" class="lanjut">Soal Selanjutnya</a>
</form>
<?php } else { 
	$nama   = $_COOKIE["username"];
	$score  = $_COOKIE["score"];

	include 'config.php';

	$sql = "INSERT INTO Hall_of_Fame (nama, score) VALUES ('$nama', '$score')";

	mysqli_query($conn, $sql);
?>

	<h3>Game Over</h3>
	<p>Hallo <i><?php echo $_COOKIE['username']?></i>, Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.</p>
	<p>Score Anda : <u><?php echo $_COOKIE['score'] ?></u></p>
	<a href="logout.php" class="lanjut">Main Lagi</a>
	<br><br><br><hr>
	<h3>Hall of Fame</h3>
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Skor</th>
		</thead>
		<tbody>
			<?php 
                $sql = "SELECT * FROM Hall_of_Fame ORDER BY score DESC limit 10";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  $no = 1;
                  while($row = $result->fetch_assoc()) { ?>
                    <th scope="row"><?php echo $no++?></th>
                    <th scope="row"><?php echo $row['nama']?></th>
                    <th scope="row"><?php echo $row['score']?></th>
		</tbody>
	<?php }}?>
	</table>
<?php }?>
</body>
</html>