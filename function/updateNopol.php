<?php

if (isset($_POST["selesai"])) {
    date_default_timezone_set('Asia/Singapore');
    $id = $_POST["id_parkir"];
    $nopol = $_POST["nomor_polisi"];
    $harga = $_POST["harga"];
    $date = date("Y-m-d H:i:s");

    mysqli_query($conn, "UPDATE kendaraan SET nomor_polisi = '$nopol', waktu_keluar = '$date', harga = '$harga',keterangan = 'Keluar' WHERE id_parkir = '$id'");
}
