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
        STRUK MASUK <br> E-PARKING
        <div class="idstruk print">
            <div class="isi print">
                <?= struk()['id_parkir'] ?>
            </div>
        </div>
        <table id="tablestruk" class="print">
            <tr class="print">
                <td class="print">Nomor Polisi</td>
                <td class="print">: <?= struk()['nomor_polisi'] ?></td>
            <tr class="print">
                <td class="print">Waktu Masuk</td>
                <td class="print">: <?= struk()['waktu_masuk'] ?></td>
            </tr>
            <tr class="print">
                <td class="print">Nama Petugas</td>
                <td class="print">: <?= $_SESSION['username'] ?></td>
            </tr>
        </table>
        <div class="footerstruk print">
            Struk hilang dikenai denda Rp. 50.000 <br> Serahkan Struk Kepada Petugas<br> di Pintu Keluar <br> Terima
            kasih
        </div>
        <button onclick="window.print()"> PRINT </button>
        <a href="../home.php"> <button> Lanjut </button> </a>
    </div>
</body>

</html>