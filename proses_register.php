<?php
	include 'koneksi.php';

	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="INSERT INTO user VALUES(null,'$username','$password');";
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

    if($query) {
		header("Location:login.php?message=berhasil");
		// echo "Input Data Berhasil. <a href='index.php'>read</a>";
	} else {
		header("Location:register.php?message=failed");
	}
?>


