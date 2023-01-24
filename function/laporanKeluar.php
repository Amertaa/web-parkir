<?php
include "./config.php";
include "./updateNopol.php";

date_default_timezone_set('Asia/Singapore');

$id    = $_POST["kode_parkir"];
$query = mysqli_query($conn, "SELECT * FROM kendaraan INNER JOIN jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id");
$data  = mysqli_fetch_assoc($query);

$jam_masuk = new DateTime($data['waktu_masuk']);
$jam_keluar = new DateTime($data['waktu_keluar']);

$total_jam = $jam_masuk->diff($jam_keluar)->h;
$total = ($total_jam + 1) * $data['bayar'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keluar</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php require_once '../view/navbarKeluar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Kendaraan Keluar</h1>
                <main class="form-keluar border">
                    <form action="" method="POST">
                        <input type="hidden" name="id_parkir" value="<?= $data['id_parkir'] ?>">
                        <div class="mb-3 m-3">
                            <label for="exampleFormControlInput1" class="form-label">Kode Parkir</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kode_parkir'] ?>" name="kode_parkir" readonly>
                        </div>
                        <div class="mb-3 m-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Kendaraan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="Roda <?= $data['jenis_id'] ?>" name="jenis_id" readonly>
                        </div>
                        <div class="mb-3 m-3">
                            <label for="exampleFormControlInput1" class="form-label">Jam Masuk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['waktu_masuk'] ?>" name="waktu_masuk" readonly>
                        </div>
                        <div class="mb-3 m-3">
                            <label for="exampleFormControlInput1" class="form-label">Jam Keluar</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['waktu_keluar'] ?>" name="waktu_keluar" readonly>
                        </div>
                        <div class="mb-3 m-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $total ?>" name="harga" readonly>
                        </div>
                        <div class="mb-3 m-3">
                            <label for="exampleFormControlInput1" class="form-label">Plat Nomor</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nomor_polisi" placeholder="Masukan Plat Nomor">
                        </div>
                        <button type="submit" name="selesai" class="button-keluar btn btn-primary w-50">Keluar</button>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>