<?php
include './function/config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
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
                <h1 class="text-center mt-5">Laporan</h1>
                <table class="table table-striped table-hover border border-2 w-100 mt-4">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Id Parkir</th>
                            <th>Jenis Kendaraan</th>
                            <th>Nomor Polisi</th>
                            <th>Waktu Masuk</th>
                            <th>Waktu Keluar</th>
                            <th>Tarif</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($all as $row) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['id_parkir'] ?></td>
                                <td>Roda <?= $row['jenis_id'] ?></td>
                                <td><?= $row['nomor_polisi'] ?></td>
                                <td><?= $row['waktu_masuk'] ?></td>
                                <td><?= $row['waktu_keluar'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['keterangan'] ?></td>
                                <?php $i++ ?>
                            <?php endforeach ?>
                            </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>