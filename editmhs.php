<?php
include("koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE idmahasiswa=$id LIMIT 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Background */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #00c4cc, #0a1a44);
            color: #fff;
        }

        /* Header Styling */
        .header-container {
            width: 100%;
            padding: 15px 0;
            background: rgba(48, 71, 94, 0.9);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 1rem;
            font-size: 1.1rem;
            margin: 0;
        }

        .breadcrumb a {
            color: #ffd369;
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: #ffdd9c;
        }

        .breadcrumb-item.active {
            color: #ffd369;
            font-weight: bold;
        }

        /* Form Container */
        .container {
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-out;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            color: #ffd369;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* Form Styling */
        .form-label {
            color: #ddd;
            font-weight: bold;
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #ffd369;
            color: #fff;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #f05454;
            box-shadow: 0 0 10px #ffd369;
        }

        /* Button Styling */
        .btn-primary {
            background-color: #f05454;
            border: none;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-primary:hover {
            background-color: #ff7979;
            transform: scale(1.05);
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            h2 {
                font-size: 1.8rem;
            }
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Header Navigation -->
    <div class="header-container">
        <header>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="Mahasiswa.php">Data Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Data Mahasiswa</li>
                </ol>
            </nav>
        </header>
    </div>

    <!-- Form Container -->
    <div class="container">
        <h2>Edit Data Mahasiswa</h2>
        <form action="updatemhs.php" method="POST">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="NIM" value="<?php echo $row['NIM']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="L" <?php echo ($row['jeniskelamin'] == 'L') ? 'checked' : ''; ?>>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" value="P" <?php echo ($row['jeniskelamin'] == 'P') ? 'checked' : ''; ?>>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="programStudi" class="form-label">Program Studi</label>
                <select class="form-select" name="prodi" required>
                    <option selected><?php echo $row['prodi']; ?></option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Sastra Inggris">Sastra Inggris</option>
                    <option value="Sastra Jepang">Sastra Jepang</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" required><?php echo $row['alamat']; ?></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
