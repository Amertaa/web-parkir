<?php
include "./config.php";


if (isset($_POST)) {

    ini_set('date.timezone', 'Asia/Singapore');
    $waktu_masuk = date("Y-m-d H:i:s");
    $jenis_id = $_POST["jenis_id"];
    $kode_parkir = $_POST["kode_parkir"];
    $nomor_polisi = $_POST["nomor_polisi"];
    $keterangan = 'Masuk';

    $select = mysqli_query($conn, "SELECT nomor_polisi FROM kendaraan WHERE nomor_polisi = '$nomor_polisi' ") or die("Error: " . mysqli_error($conn));

    if (mysqli_num_rows($select) > 0) {
        echo  "
                <script>
                alert('Data Ganda');
                document.location.href = '../home.php';
                </script>
            ";
    } else {
        $query = mysqli_query($conn, "INSERT INTO `kendaraan` VALUES('','$jenis_id','$nomor_polisi','$kode_parkir','$waktu_masuk','','','$keterangan')") or die("Error: " . mysqli_error($conn));

        if ($query) {
            if ($image_size > 200000) {
                echo "
                    <script>
                    alert('Gambar Terlalu Besar');
                    document.location.href = '../home.php';
                    </script>
                ";
            } else {
                move_uploaded_file($image_tmp_name, $image_folder);
                echo "
                <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = '../home.php';
                </script>
                ";
                header("Location: ./struk.php");
            }
        } else {
            echo "
            <script>
            alert('Data Tidak Berhasil Ditambahkan');
            document.location.href = '../home.php';          
            </script>
            ";
        }
    }
}
