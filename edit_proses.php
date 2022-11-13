<?php
	include 'koneksi.php';

    $id_jadwal	= $_POST['id_jadwal'];
	$mk		    = $_POST['mk'];
	$jurusan	= $_POST['jurusan'];
	$id_waktu	= $_POST['id_waktu'];
	$id_lab		= $_POST['id_lab'];

	$sql	= "UPDATE jadwal SET mk='$mk', jurusan='$jurusan', id_waktu='$id_waktu', id_lab='$id_lab' where id_jadwal='$id_jadwal'";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect)); 

	if($query) {
		header("Location:jadwal.php");
	} else {
		echo "Edit Data Gagal.";
	}
	
?>