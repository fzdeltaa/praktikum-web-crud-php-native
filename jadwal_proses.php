<?php
	include 'koneksi.php';

	$mk		    = $_POST['mk'];
	$jurusan	= $_POST['jurusan'];
	$id_waktu	= $_POST['id_waktu'];
	$id_lab		= $_POST['id_lab'];

	$sql	= "INSERT INTO `jadwal` (`id_jadwal`, `mk`, `jurusan`, `id_lab`, `id_waktu`) VALUES (NULL, '$mk', '$jurusan', '$id_lab', '$id_waktu');";
	

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("Location:jadwal.php");
		// echo "Input Data Berhasil. <a href='index.php'>read</a>";
	} else {
		echo "Input Data Gagal.";
	}
	
?>