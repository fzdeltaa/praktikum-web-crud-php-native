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
			<h1> Register Page</h1>
			<hr>
            <p>Silakan buat akun terlebih dahulu <br>
            <?php
            if (isset($_GET['message'])) 
			{
				if ($_GET['message'] == 'failed') {
					echo "Register gagal";
				}
            }
                ?>
                </p>
			<form method="POST" action="proses_register.php">
				<table>
					<tr>
						<td> <input class="form-control text-light bg-transparent" type="text" name="username" placeholder="Masukkan username"></td>
					</tr>
					<tr>
						<td> <input class="form-control text-light bg-transparent" type="text" name="password" placeholder="Masukkan password"></td>
					</tr>
				</table>
				<br>
				<input type="submit" name="daftar" value="DAFTAR" class="btn btn-dark btn-outline-light tabel">
			</form>
            <p class="pt-2">Sudah punya akun? <a href="login.php">Login di sini.</a></p>
	</center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>