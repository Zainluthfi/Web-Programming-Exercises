<?php 
if ($_COOKIE['username'] == FALSE) {
  header("Location:index.php");
}
$a = rand(0,20);
$b = rand(0,20);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Math</title>
</head>
<body>
<form method="POST" action="ans.php">
  <p>Hallo <i><?php echo $_COOKIE['username']?></i>, tetap semangat ya… you can do the best!!</p>	
  <p>Live : <u><?php echo $_COOKIE['live']?></u> | Score : <u><?php echo $_COOKIE['score'] ?></u></p>
  <label for="soal">Soal</label>
  <input type="hidden" name="a" value="<?php echo $a ?>">
  <input type="hidden" name="b" value="<?php echo $b ?>">
  <input type="text" id="soal" name="soal" placeholder="Berapakah <?php echo $a ?> + <?php echo $b ?> : " disabled>
  <label for="lname">Jawab</label>
  <input type="text" id="jawab" name="jawab" placeholder="Jawab">
  <input type="submit" name="submit" value="Jawab">
</form>
</body>
</html>

