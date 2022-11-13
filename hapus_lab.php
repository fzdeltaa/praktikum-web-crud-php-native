<?php
	include 'koneksi.php';

    $id_lab	= $_GET['id_lab'];

	$sql	= "DELETE from lab where id_lab='$id_lab';";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect)); 

	if($query) {
		header("Location:lab.php");
	} else {
		echo "Hapus Data Gagal.";
	}
	
?>