<?php
include("koneksi.php");
if(isset($_POST["login"])){
    $NIDN = $_POST["NIDN"];
    $nama = $_POST["nama"];
    $jeniskealmin = $_POST["jeniskelamin"];
    $jabatan = $_POST["jabatan"];
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO dosen (NIDN, nama, jeniskelamin, jabatan, alamat) VAlUES ('$NIDN','$nama','$jeniskealmin','$jabatan','$alamat')";

    if($connection->query($sql)) {
       
        header("location: Dosen.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>

<body>
    <header>
        <div class="row" style="margin: auto; padding-top: 15px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a href="index.html">home</a> </li>
                    <li class="breadcrumb-item a" aria-current="page"><a href="Dosen.php">Data Dosen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Input Data Dosen</li>
                </ol>
            </nav>
        </div>
    </header>
   
    <div class="container">
        <h2 class="text-center">Input Data Dosen</h2>
        <form action="login_2.php" method="POST">
        <div class="mb-3">
                <label for="nim" class="form-label">NIDN</label>
                <input type="text" class="form-control" name="NIDN" id="NIDN">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="male" value="Laki-Laki">
                    <label class="form-check-label" for="male">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="female" value="Perempuan" checked>
                    <label class="form-check-label" for="female">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="jabatan"  class="form-label">Jabatan</label>
                <select class="form-select" name= "jabatan" id="jabatan">
                    <option selected>Pilih Jabatan ...</option>
                    <option value="Kaprodi">Kaprodi</option>
                    <option value="Rektor">Rektor</option>
                    <option value="Dekan">Dekan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" name= "alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name ="alamat" id="alamat" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name= "login">SIMPAN</button>
            </div>
        </form>
    </div>
    <?php include "layout/footer.html"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>