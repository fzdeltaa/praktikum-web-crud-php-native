<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location:login.php?message=blm");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Index</title>
</head>

<body class="index">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <p class="navbar-brand">Praktikum IF | hehe</p>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </form>
            </div>
        </div>
    </nav>
    <center>
        <div class="tengah">
            <p>Selamat Datang Di</p>
            <h1>Praktikum Informatika</h1>
            <br>

            <div class="container text-center">
                <div class="row pb-3">
                    <div class="col">
                        <a href="lab.php" class="d-grid"> <button type="button" class="btn btn-dark btn-outline-light">Lab</button></a>
                    </div>
                    <div class="col">
                        <a href="waktu.php" class="d-grid"> <button type="button" class="btn btn-dark btn-outline-light">Waktu Praktikum</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="jadwal.php" class="d-grid"> <button type="button" class="btn btn-dark btn-outline-light">Jadwal Praktikum</button></a>
                    </div>
                </div>
            </div>
        </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>