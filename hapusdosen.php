<?php
include("koneksi.php");

$id =$_GET['id'];
$sql = "DELETE FROM dosen WHERE idDosen = '$id'";



    if($connection->query($sql)) {
       
        header("location: Dosen.php");
    }
?>