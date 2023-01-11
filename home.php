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

    <h1 class="text-center py-5 fs-1">Input Kendaraan</h1>
    <main class="container-input ">

        <form action="" method="POST">
            <button class="button btn btn-secondary" type="submit">
                <div class="fs-1 d-flex jus">
                    <!-- <iconify-icon icon="fa6-solid:motorcycle"></iconify-icon> -->
                    Roda 2
                </div>
            </button>
        </form>

    </main>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>