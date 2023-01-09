<?php
include './function/config.php';
include './function/cek.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <?php
    require_once './function/navbar.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Kendaraan Keluar</h1>
                <table class="table table-striped table-hover border border-2 w-100 mt-4">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Id Parkir</th>
                            <th>Jenis Kendaraan</th>
                            <th>Nomor Polisi</th>
                            <th>Waktu Masuk</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $row) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['id_parkir'] ?></td>
                                <td>Roda <?= $row['jenis_id'] ?></td>
                                <td><?= $row['nomor_polisi'] ?></td>
                                <td><?= $row['waktu_masuk'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['keterangan'] ?></td>
                                <td>
                                    <?php ini_set('date.timezone', 'Asia/Singapore'); ?>
                                    <a href='./function/bayarKeluar.php?id=<?= $row["id_parkir"] ?>&bayar=<?= $row['bayar'] ?>&waktu=<?= date("Y-m-d H:i:s") ?>' class="btn btn-success">Konfirmasi</a>
                                </td>
                                <?php $i++ ?>
                            <?php endforeach ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>