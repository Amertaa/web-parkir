<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "parking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die(mysqli_error($conn));
$users = query("SELECT * FROM `kendaraan` INNER JOIN  jeniskendaraan ON kendaraan.jenis_id = jeniskendaraan.jenis_id 
    WHERE keterangan = 'Masuk' ORDER BY id_parkir ASC") or die(mysqli_error($conn));
$all = mysqli_query($conn, "SELECT * FROM kendaraan") or die(mysqli_error($conn));

// Function

function cari($keyword)
{
    $query = "SELECT * FROM kendaraan WHERE kode_parkir LIKE '%$keyword%'";

    return query($query);
}


function jenis()
{

    global $conn;
    $result = mysqli_query($conn, "SELECT jenis_id, kendaraan FROM jeniskendaraan ORDER BY kendaraan DESC");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function struk()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM kendaraan ORDER BY id_parkir DESC LIMIT 1;");
    $dt = mysqli_fetch_assoc($result);

    return $dt;
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ISSET
