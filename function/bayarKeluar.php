<?php

include "./config.php";

$id = $_GET["id"];
$bayar = $_GET["bayar"];
$waktu_keluar = $_GET["waktu"];


// fungsi keluar
global $id, $bayar, $kode_bayar, $conn;

$waktu = mysqli_query($conn, "SELECT waktu_masuk FROM kendaraan WHERE id_parkir = $id");
$waktu_masuk = mysqli_fetch_assoc($waktu);
$keterangan = "Keluar";
$rumus = ceil(((strtotime($waktu_keluar) - strtotime($waktu_masuk['waktu_masuk'])) / 3600));
$harga = $rumus * $bayar;
$query = "UPDATE kendaraan SET waktu_keluar = '$waktu_keluar', harga='$harga', keterangan= '$keterangan' WHERE id_parkir = $id";
mysqli_query($conn, $query);
include_once('./laporanKeluar.php');
