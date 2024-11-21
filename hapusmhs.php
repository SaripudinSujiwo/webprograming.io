<?php
include("koneksi.php");

$id =$_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE idmahasiswa = '$id'";



    if($connection->query($sql)) {
       
        header("location: mahasiswa.php");
    }
?>