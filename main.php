<?php
include './function/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body style="overflow: hidden;">

    <?php
    require_once './view/navbar.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 fw-bold ">Selamat Datang di E-Parking</h1>
            </div>
            <div class="box-container mt-4">
                <div class="box bg-success text-white rounded-1 p-2 shadow-sm fs-4 text-left border border-dark">
                    Kendaraan Masuk
                    <?php
                    $select_all_masuk = mysqli_query($conn, "SELECT * FROM kendaraan WHERE keterangan = 'Masuk'") or die(mysqli_error($conn));
                    $number_masuk = mysqli_num_rows($select_all_masuk);
                    ?>
                    <p class=""><?php echo $number_masuk ?></p>
                </div>
                <div class="box bg-success text-white rounded-1 p-2 shadow-sm fs-4 text-left border border-dark">
                    Kendaraan Keluar
                    <?php
                    $select_all_keluar = mysqli_query($conn, "SELECT * FROM kendaraan WHERE keterangan = 'Keluar'") or die(mysqli_error($conn));
                    $number_keluar = mysqli_num_rows($select_all_keluar);
                    ?>
                    <p class=""><?php echo $number_keluar ?></p>
                </div>
                <div class="box bg-success text-white rounded-1 p-2 shadow-sm fs-4 text-left border border-dark">
                    Pendapatan

                    <p class=""></p>
                </div>

            </div>
        </div>


        <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>