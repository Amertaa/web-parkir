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

    <?php require_once './navbarKeluar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Kendaraan Keluar</h1>
                <table class="table table-striped table-hover border border-2 w-100 mt-4">
                    <thead>
                        <tr>
                            <th>Waktu Keluar</th>
                            <th>Total Waktu</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><?= $waktu_keluar ?></td>
                        <td><?= $rumus . " Jam" ?></td>
                        <td><?= "Rp. " . $harga ?></td>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>