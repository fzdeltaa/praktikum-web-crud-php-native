<?php
	include 'koneksi.php';

    $id_jadwal	= $_GET['id_jadwal'];

	$sql	= "DELETE from jadwal where id_jadwal='$id_jadwal';";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect)); 

	if($query) {
		header("Location:jadwal.php");
	} else {
		echo "Hapus Data Gagal.";
	}
	
?>