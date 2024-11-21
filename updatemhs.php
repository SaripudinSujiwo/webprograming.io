<?php
include('koneksi.php');
    $id = $_GET['id'];
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    
    $query = "UPDATE mahasiswa SET
                NIM ='$NIM',
                nama ='$nama',
                jeniskelamin ='$jeniskelamin',
                prodi ='$prodi',
                alamat ='$alamat'
                WHERE NIM = '$NIM'";

    if($connection->query($query)) {
       
        header("location: Mahasiswa.php");
    }else {
        echo "Data gagal diupdate!";
    }
    

?>