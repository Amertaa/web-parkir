<?php
include './function/config.php';

if (isset($_POST["cari"])) {
    $menu = cari($_POST["kode_parkir"]);
    if (keluar()) {
        echo "Data Tidak Bisa Di Akses Lagi!";
    }
} else {
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan Keluar</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <?php
    require_once './view/navbar.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Kendaraan Keluar</h1>
                <div class="megalodon">
                    <form action="./function/laporanKeluar.php" method="POST" class="form-submit d-flex">
                        <input id="code-input" type="search" class="search mt-3" name="kode_parkir" required>
                        <input type="hidden" name="keyword">
                        <a href=""><button id="code-submit" class="button btn btn-primary p-2" name="cari" value="cari">Cari Kode</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>