<?php
include './function/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roda 2</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <script defer src="./js/main.js"></script>

</head>

<body onload="configure();">
    <?php
    require_once './view/navbar.php';
    ?>

    <h1 class="text-center py-5 fs-1">Input Kendaraan</h1>
    <main class="container-input ">
        <form id="myform" action="./cetakStruk.php" method="POST" class="d-flex" onclick="take_snapshot()" enctype="multipart/form-data">
            <button class="button btn btn-secondary" type="submit" value="Take Snapshot">
                <div class=" fs-1">
                    Roda 2
                </div>
            </button>
            <input type="hidden" name="kode_parkir" value="<?php echo rand(10000000, 90000000) ?>">
            <input type="hidden" name="waktu_masuk">
            <input type="hidden" name="jenis_id" value="2">
            <div id="my_camera"></div>
            <input id="image" type="hidden" name="image">
            <div id="results" style="visibility: hidden; position: absolute;"></div>
        </form>

    </main>

    <!-- CDN -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

</body>

</html>