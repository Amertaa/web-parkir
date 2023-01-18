<?php
include "./config.php";
include "./cek.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
    <link rel="stylesheet" href="../style/style.css">


</head>

<body>
    <div class="luar print">
        TIKET PARKIR <br> BIGMALL SAMARINDA
        <div class="text-jl"> Jl. Jend. Ahmad Yani, Sukmajaya, Samarinda</div>
        <div class="idstruk print">
            <div class="isi print">
                <div class="waktu"><?= struk()['waktu_masuk'] ?></div>
                <svg id="barcode"></svg>
            </div>
        </div>
        <div class="footer">
            <div>Hilang Tanggung Sendiri</div>
            <div>Terima Kasih</div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <script>
        JsBarcode("#barcode", "<?= struk()['kode_parkir'] ?>", {
            width: (2.8),
            height: (50)
        })
    </script>


</body>

</html>