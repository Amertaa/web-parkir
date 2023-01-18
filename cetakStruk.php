<?php
require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

include "./function/config.php";

date_default_timezone_set('Asia/Singapore');

$waktu_masuk = date("Y-m-d H:i:s");
$jenis_id = $_POST["jenis_id"];
$kode_parkir = $_POST["kode_parkir"];
$keterangan = 'Masuk';

$tambah = mysqli_query($conn, "INSERT INTO `kendaraan` VALUES('','$jenis_id','','P$kode_parkir','$waktu_masuk','','','$keterangan')");
$id = mysqli_insert_id($conn);
$query = "SELECT * FROM kendaraan WHERE id_parkir = $id";

$hasil  = query($query);

$connector = new WindowsPrintConnector("aryo");
$printer   = new Printer($connector);
$printer->setFont(Printer::FONT_A);
$printer->text("KARCIS RODA 2\n");
$printer->setJustification(Printer::JUSTIFY_CENTER);
$printer->feed(1);
$printer->text(date('d/m/Y h:i:s', strtotime($hasil[0]['waktu_masuk'])));
$printer->feed();
$printer->text($kode_parkir);
$printer->feed();
$printer->barcode($kode_parkir, Printer::BARCODE_JAN13);
$printer->feed();
$printer->cut();
$printer->close();

header('location: roda_2.php');
