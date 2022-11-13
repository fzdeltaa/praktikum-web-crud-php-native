<?php
	include 'koneksi.php';

	$lab		    = $_POST['lab'];

	$sql	= "INSERT INTO lab VALUES(null, '$lab')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("Location:lab.php");
		// echo "Input Data Berhasil. <a href='index.php'>read</a>";
	} else {
		echo "Input Data Gagal.";
	}
	
?>