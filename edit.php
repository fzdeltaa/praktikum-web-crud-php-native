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
    <title>Edit</title>
</head>

<body class="index">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <p class="navbar-brand">Praktikum IF | 123210111</p>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="lab.php">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="waktu.php">Waktu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="jadwal.php">Jadwal</a>
                    </li>
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
    <?php 
		include 'koneksi.php';
		$id_jadwal = $_GET['id_jadwal'];
		$queryedit = mysqli_query($connect,"SELECT * from jadwal where id_jadwal=$id_jadwal");
		$data = mysqli_fetch_array($queryedit);

	 ?>


        <div class="container text-center">
            <div class="row pt-5">
                <div class="col"></div>
                <div class="col-5 align-self-center">
                    <h1>Ubah Jadwal Praktikum</h1>
                    <hr>
                    <h6>Buat jadwal praktikum sesuai dengan yang diinginkan</h6>
                    <form method="POST" action="edit_proses.php">

                        <div class="pt-5">
                        <input type="hidden" name="id_jadwal" value="<?= $data['id_jadwal'];?>"> <br>
                            <input class="form-control text-light bg-transparent" style="float:left; width: 65%;" type="text" name="mk" placeholder="Masukkan MK Praktikum" value="<?= $data['mk'];?>">


                            <input class="form-check-input" type="radio" name="jurusan" id="radio1" value="IF">
                            <label class="form-check-label" for="radio1">
                                IF
                            </label>
                            <input class="form-check-input" type="radio" name="jurusan" id="radio2" value="SI">
                            <label class="form-check-label" for="radio2">
                                SI
                            </label>
                            <br>
                            <br>
                            <br>

                            <select class="form-select" style="color:white; background-color: #212429;" name="id_lab">
                                <option selected>Pilih Lab</option>
                                <?php
                                include 'koneksi.php';
                                $sqllab   = "SELECT * FROM lab";
                                $querylab  = mysqli_query($connect, $sqllab);

                                while ($datalab = mysqli_fetch_array($querylab)) {
                                ?>
                                    <option value="<?= $datalab['id_lab']; ?>"> <?= $datalab['lab']; ?> </option>
                                <?php } ?>
                            </select>
                            <br>

                            <select class="form-select" style="color:white; background-color: #212429;" name="id_waktu">
                                <option selected>Pilih Jam</option>
                                <?php
                                include 'koneksi.php';
                                $sqljam  = "SELECT * FROM waktu";
                                $queryjam  = mysqli_query($connect, $sqljam);

                                while ($datajam = mysqli_fetch_array($queryjam)) {
                                ?>
                                    <option value="<?= $datajam['id_waktu']; ?>"><?= $datajam['waktu_mulai']; ?>-<?= $datajam['waktu_selesai']; ?></option>
                                <?php } ?>
                            </select>

                            <div class="row pt-4 pb-">
                                <div class="d-grid gap-2">
                                    <input class="btn btn-outline-light" type="submit"></button>
                                </div>
                                <div class="d-grid gap-2 pt-3">
                                    <input class="btn btn-outline-light" type="reset"></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>