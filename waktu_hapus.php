<?php
	include 'koneksi.php';

    $id_waktu	= $_GET['id_waktu'];

	$sql	= "DELETE from waktu where id_waktu='$id_waktu';";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect)); 

	if($query) {
		header("Location:waktu.php");
	} else {
		echo "Hapus Data Gagal.";
	}
	
?>