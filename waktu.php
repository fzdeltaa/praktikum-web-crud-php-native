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
    <title>Jadwal</title>
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
                        <p class="nav-link active" aria-current="page" href="waktu.php">Waktu</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="jadwal.php">Jadwal</a>
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

    <div class="container text-center">
        <div class="row">
            <div class="col ms-5 me-5 pt-5 ps-5 pe-5">
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Waktu</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    include('koneksi.php');

                    $sql    = "SELECT * from waktu";
                    $query    = mysqli_query($connect, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $data['id_waktu']; ?></td>
                            <td><?= $data['waktu_mulai']; ?>-<?= $data['waktu_selesai']; ?></td>
                            <td><a href=waktu_hapus.php?id_waktu=<?php echo $data['id_waktu']; ?>><button type="button" class="btn btn-dark btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>


            <div class="col ms-5 me-5 pt-5 ps-5 pe-5">
                <h1>Input Waktu Praktikum</h1>
                <hr>
                <h6>Masukkan Waktu Pelaksanaan Praktikum</h6>
                <form method="POST" action="waktu_proses.php">

                    <div class="container pt-5">
                        <div class="row">
                            <div class="col">
                                <label for="waktu_mulai" class="form-label">Mulai</label>
                                <input class="form-control text-light bg-transparent text-align-center" type="time" name="waktu_mulai" placeholder="--:--">
                            </div>
                            <div class="col">
                                <label for="waktu_selesai" class="form-label">Sampai</label>
                                <input class="form-control text-light bg-transparent text-align-center" type="time" name="waktu_selesai" placeholder="--:--">
                            </div>

                        </div>
                        <div class="row pt-4">
                            <div class="d-grid gap-2">
                                <input class="btn btn-outline-light" type="submit"></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>