<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row" style="margin: auto; padding-top: 10px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item " aria-current="page"><a href="index.html">home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Data Dosen</li>
            </ol>
        </nav>
    </div>
    <div class="row text-center" style="padding-top: 30px; ">
        <h1 style="color:blueviolet;">Data Dosen</h1>
    </div>
    <div class="container" style="padding-top: 20px; border: 2px;">
        <table class="table" style="border: 2px solid; border-radius: 10px;">
          <thead style="border: 2.5px solid ;">
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIDN</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include('koneksi.php');
            $no = 1;
            $query = mysqli_query($connection, "SELECT * FROM dosen");
            while ($row = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php  echo $no ++?></th>
              <td><?php  echo $row ['NIDN']?></td>
              <td><?php  echo $row ['nama']?></td>
              <td><?php  echo $row ['jeniskelamin']?></td>
              <td><?php  echo $row ['jabatan']?></td>
              <td><?php  echo $row ['alamat']?></td>
              <td>
                <a href="" class="btn btn-info m-r-1em">Detail</a>
                <a href="#" class="btn btn-primary m-r-1em">Ubah</a>
                <a href='hapusdosen.php?id=<?php echo $row['idDosen']?>'  class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <div class="container text-center">
        <div class="row" style="margin: 30px;">
          <div class="col align-self-center">
            <button type="button" onclick="window.location.href='login_2.php';" class="btn btn-success">
              Tambah Data Dosen
            </button>
          </div>
        </div>
      </div>
      <?php include "layout/footer.html"?>
</body>
</html>