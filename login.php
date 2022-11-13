<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>Login</title>
</head>

<body class="login">
	<center>
		<div style="width: 300px;">
			<h1> Login Page</h1>
			<hr>
			<p>
			<?php
			if (isset($_GET['message'])) 
			{
				if ($_GET['message'] == 'failed') {
					echo "Login gagal";
				}
				elseif ($_GET['message'] == 'logout') {
					echo "Anda telah berhasil logout";
				}
				elseif ($_GET['message'] == 'blm') {
					echo "Belum Login";	
				}
				elseif ($_GET['message'] == 'berhasil') {
					echo "Register berhasil, silakan login";	
				}
			} 
			?>
			</p>
			<form method="POST" action="proses_login.php">
				<table>
					<tr>
						<td> <input class="form-control text-light bg-transparent" type="text" name="username" placeholder="Masukkan username"></td>
					</tr>
					<tr>
						<td> <input class="form-control text-light bg-transparent" type="text" name="password" placeholder="Masukkan password"></td>
					</tr>
				</table>
				<br>
				<input type="submit" name="login" value="LOGIN" class="btn btn-dark btn-outline-light tabel">
			</form>
			<p class="pt-2">Belum punya akun? <a href="register.php">Daftar di sini.</a></p>
	</center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>