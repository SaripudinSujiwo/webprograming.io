<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masuk</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Background styling */
        body {
            background: linear-gradient(135deg, #00c4cc, #0a1a44);
            background-size: cover;
            background-attachment: fixed;
        }
        /* Custom styling for success message */
        .success-message {
            background-color: #ffffffcc;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding: 2rem;
        }
    </style>
</head>
<body>

    <!-- Header dan Breadcrumb -->
    <header class="container-fluid bg-light py-3 shadow-sm">
        <nav aria-label="breadcrumb" class="container">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="Mahasiswa.php">Data Mahasiswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Input Data Mahasiswa</li>
            </ol>
        </nav>
    </header>

    <!-- Pesan Sukses -->
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
        <div class="col-md-8 col-lg-6 success-message text-center">
            <h1 class="display-5 fw-bold text-success">Data Berhasil Dimasukkan!</h1>
            <p class="lead mt-3">Terima kasih, data Anda telah berhasil disimpan ke dalam sistem.</p>
            <hr class="my-4">
            <p>Anda dapat melihat atau menambahkan data mahasiswa lainnya.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                <a href="Mahasiswa.php" class="btn btn-primary btn-lg">Lihat Data Mahasiswa</a>
                <a href="login.php" class="btn btn-outline-primary btn-lg">Tambah Data Baru</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppKXGfYl3FjAq2TzskPjmtFWEvJGriImPwypsJHTs3hNEM1s6prhW16z65ecKp7y" crossorigin="anonymous"></script>
</body>
</html>
