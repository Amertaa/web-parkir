<?php
include './function/config.php';
include './function/cek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <?php
    require_once './function/navbar.php';
    ?>

    <h1 class="text-center py-5 fs-1">Input Kendaraan</h1>
    <main class="container-input ">

        <div class="card-input border border-2 rounded">
            <form action="./function/input.php" method="POST" enctype="multipart/form-data">
                <div class="input mb-1 ">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Kendaraan</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_id" required>
                        <option selected>Pilih Jenis Kendaraan</option>
                        <?php foreach (jenis() as $no) : ?>
                            <option value="<?php echo $no['jenis_id'] ?>" name="jenis_id">
                                <?php echo $no['kendaraan'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="input mb-1 ">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Polisi</label>
                    <input type="text" class="form-control" min="10" max="11" name="nomor_polisi" id="exampleFormControlInput1" placeholder="Masukan Nomor Polisi" required>
                </div>
                <div class="input mb-1 ">
                    <label for="formFileMultiple" class="form-label">Foto</label>
                    <input class="form-control" type="file" name="Foto" id="formFileMultiple" multiple required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary ms-4 mb-4 w-25 fw-bold">Tambah</button>
        </div>
        </form>

    </main>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>