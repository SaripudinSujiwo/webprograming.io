<?php
// include("koneksi.php");
// if(isset($_POST["login"])){
//     $NIM = $_POST["NIM"];
//     $nama = $_POST["nama"];
//     $jeniskelamin = $_POST["jeniskelamin"];
//     $prodi = $_POST["prodi"];
//     $alamat = $_POST["alamat"];

//     $sql = "INSERT INTO mahasiswa (NIM, nama, jeniskelamin, prodi, alamat) VAlUES ('$NIM','$nama','$jeniskelamin','$prodi','$alamat')";

//     if($connection->query($sql)) {
       
//         header("location: berhasil.php");
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #00c4cc, #0a1a44);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            padding: 20px;
        }

        /* Container Styling */
        .container {
            max-width: 600px;
            padding: 40px 30px;
            background: rgba(255, 255, 255, 0.1); /* Transparan gelap */
            border-radius: 15px;
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px); /* Efek blur untuk kesan modern */
            color: #ffffff;
        }

        .container h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: #f3e5f5;
        }

        /* Form Styling */
        .form-label {
            color: #f3e5f5;
            font-weight: bold;
        }

        .form-control, .form-select, .form-check-input, #image {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            border: 1px solid #6a1b9a;
            transition: background 0.3s;
        }

        .form-control:focus, .form-select:focus {
            background-color: rgba(255, 255, 255, 0.3);
            color: #000;
            border-color: #4a148c;
            box-shadow: none;
        }

        /* Radio Button Styling */
        .form-check-input:checked {
            background-color: #6a1b9a;
            border-color: #4a148c;
        }

        /* Button Styling */
        .btn-primary {
            background-color: #6a1b9a;
            border: none;
            font-weight: bold;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #4a148c;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(106, 27, 154, 0.4);
        }

        /* Custom File Upload Styling */
        #image {
            padding: 8px;
            border-radius: 5px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            .container h2 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Input Data Mahasiswa</h2>
        <form action="upload.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="NIM" id="NIM" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="male" value="L" required>
                    <label class="form-check-label" for="male">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="female" value="P" required>
                    <label class="form-check-label" for="female">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="programStudi" class="form-label">Program Studi</label>
                <select class="form-select" name="prodi" id="programStudi" required>
                    <option selected disabled>Pilih Program Studi ...</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Sastra Inggris">Sastra Inggris</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Upload Foto</label>
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="login">SIMPAN</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
