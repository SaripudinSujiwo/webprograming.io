<?php
include('koneksi.php'); // Menghubungkan ke database

if (isset($_POST['login'])) {
    $NIM = $_POST["NIM"];
    $nama = $_POST["nama"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    if($_FILES["image"]["error"] == 4){
      
        echo
        "<script> alert('Image Does Not Exist'); </script>";
        header("location: login.php");
      }
      else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
    
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize > 1000000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }
        else{
          $newImageName = uniqid();
          $newImageName .= '.' . $imageExtension;
    
          move_uploaded_file($tmpName, 'img/' . $newImageName);
          $query =$query = "INSERT INTO mahasiswa (NIM, nama, jeniskelamin, prodi, alamat, image) VALUES ('$NIM', '$nama', '$jeniskelamin', '$prodi', '$alamat', '$newImageName')";
          if($connection->query($query)) {
            "
            <script>
              alert('Successfully Added');
              document.location.href = 'Mahasiswa.php';
            </script>
            ";
       
                    header("location: berhasil.php");
                }
         
        }
      }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <h1 style= "text-align: center; color: #0000;"><a href="login.php">Login Ulang</a></h1>
      
    </body>
    </html>
