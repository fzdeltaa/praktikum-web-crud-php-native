<?php
	include 'koneksi.php';

	$waktu_mulai		    = $_POST['waktu_mulai'];
    $waktu_selesai		    = $_POST['waktu_selesai'];

	$sql	= "INSERT INTO waktu VALUES(null, '$waktu_mulai', '$waktu_selesai')";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("Location:waktu.php");
		// echo "Input Data Berhasil. <a href='index.php'>read</a>";
	} else {
		echo "Input Data Gagal.";
	}
	
?>