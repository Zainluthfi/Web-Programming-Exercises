<!DOCTYPE html>
<html>
<head>
	<title>UTS Pemrograman Web</title>
</head>
<?php 
if (isset($_POST['submit'])){
setcookie("username", $_POST['uname'], time()+3*30*24*3600,"/");
setcookie("email", $_POST['email'], time()+3*30*24*3600,"/");
setcookie("live", 5, time()+3*30*24*3600,"/");
setcookie("score", 0, time()+3*30*24*3600,"/");
header("Location:proses.php");
}

if (isset($_COOKIE['username'])){?> 
	  <p>Hallo <?php echo $_COOKIE['username']?>, selamat datang kembali di permainan ini!!!</p>	
	  <a href="proses.php" class="lanjut">Start Game</a>
	  <br><br><p>Bukan Anda? <a href='logout.php'>Klik Disini</a></p>
		<?php
		setcookie("username", $_COOKIE['username'], time()+3*30*24*3600,"/");
		setcookie("email", $_COOKIE['email'], time()+3*30*24*3600,"/");
		setcookie("live", $_COOKIE['live'], time()+3*30*24*3600,"/");
		setcookie("score", $_COOKIE['score'], time()+3*30*24*3600,"/");	  
} else {
?>
<body>
<form method="POST" action="index.php">
  <label for="uname">Masukkan Nama :</label>
  <input type="text" id="uname" name="uname" placeholder="Nama">
  <label for="lname">Masukkan Email :</label>
  <input type="email" id="email" name="email" placeholder="Email">
  <input type="submit" name="submit" value="Masuk">
</form>
<?php } ?>
</body>
</html>