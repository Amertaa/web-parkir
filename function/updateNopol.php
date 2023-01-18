<?php

if (isset($_POST["update"])) {
    $id["id_parkir"];
    $nopol["nomor_polisi"];

    mysqli_query($conn, "UPDATE kendaraan SET nomor_polisi = $nopol WHERE id_parkir = '$id'");
}
