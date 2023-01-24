<?php

if (isset($_POST["selesai"])) {
    $id = $_POST["id_parkir"];
    $nopol = $_POST["nomor_polisi"];
    $harga = $_POST["harga"];

    mysqli_query($conn, "UPDATE kendaraan SET nomor_polisi = $nopol harga = $harga WHERE id_parkir = '$id'");
}
