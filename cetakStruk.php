<?php
require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

include "./function/config.php";

date_default_timezone_set('Asia/Singapore');

$waktu_masuk = date("Y-m-d H:i:s");
$jenis_id = $_POST["jenis_id"];
$kode_parkir = $_POST["kode_parkir"];
$image = $_POST['image'];
$binary_data = base64_decode($image);

$fileName = "img/P$kode_parkir.jpg";
$result = file_put_contents($fileName, $binary_data);

$keterangan = 'Masuk';

$tambah = mysqli_query($conn, "INSERT INTO `kendaraan` VALUES('','$jenis_id','','$kode_parkir','$waktu_masuk','','','P$kode_parkir.jpg','$keterangan')");

$id = mysqli_insert_id($conn);
$query = "SELECT * FROM kendaraan WHERE id_parkir = $id";

$hasil  = query($query);

$connector = new WindowsPrintConnector("aryoKeren");
$printer   = new Printer($connector);

$printer->initialize();
$printer->setFont(Printer::FONT_A);
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->setBarcodeWidth(5);
$printer->setBarcodeHeight(100);
$printer->setTextSize(1, 1);
$printer->text("      SMK NEGERI 7 SAMARINDA\n");
$printer->text("          KARCIS RODA 2\n");
$printer->feed(1);
$printer->text("Tanggal : ");
$printer->text(date('d/m/Y', strtotime($hasil[0]['waktu_masuk'])));
$printer->feed();
$printer->text("Waktu   : ");
$printer->text(date('h:i:s', strtotime($hasil[0]['waktu_masuk'])));
$printer->feed(2);
$printer->barcode($kode_parkir, Printer::BARCODE_ITF);
$printer->setJustification(Printer::JUSTIFY_LEFT);
$printer->text("            $kode_parkir");
$printer->feed(2);
$printer->text("       Jangan Sampai Hilang\n");
$printer->text("           Terima Kasih\n");
$printer->feed();
$printer->cut();
$printer->close();

header('location: roda_2.php');
