<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        /* Header utama */
        h1 {
            color: #6a1b9a;
            font-weight: bold;
            margin-top: 30px;
            font-size: 3rem;
        }

        /* Breadcrumb */
        .breadcrumb {
            background-color: transparent;
            font-size: 1.2rem;
        }
        .breadcrumb-item a {
            color: #000;
            text-decoration: none;
        }
        .breadcrumb-item.active {
            color: #6a1b9a;
            
        }

        /* Tabel Data */
        .table {
            
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .table th {
            background: linear-gradient(-0deg, #00c4cc, #0a1a44);
            color: white;
            text-align: center;
            font-weight: bold;
        }
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Gaya tombol */
        .btn {
            border-radius: 20px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .btn-info {
            background-color: #5bc0de;
            border: none;
            color: #000;
        }
        .btn-primary {
            background-color: ye;
            border: none;
            color: #000;
        }
        .btn-danger {
            background-color:red;
            border: none;
            color: #000;
        }
        .btn-success {
            
            background-color:#6a1b9a;
            border: none;
            
        }
        .btn:hover {
            background-color:#6a1b9a;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.8);
            /* opacity: 0.7; */
            transform: scale(1.05);
            color: #ffff;
        }

        /* Tombol Tambah Data Mahasiswa */
        .add-button {
            
            margin: 20px;
            font-weight: bold;
            padding: 10px 20px;
            font-size: 1rem;
        }

        /* Footer */
        footer {
            font-size: 0.9rem;
            color: #777;
            margin-top: 20px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.5em;
            }
            .table-responsive {
                overflow-x: auto;
            }
            .btn {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
            </ol>
        </nav>

        <!-- Judul Halaman -->
        <div class="text-center">
            <h1>Data Mahasiswa</h1>
        </div>

        <!-- Tabel Data Mahasiswa -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include('koneksi.php');
                    $no = 1;
                    $query = mysqli_query($connection, "SELECT * FROM mahasiswa");
                    while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $row['NIM'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['jeniskelamin'] ?></td>
                        <td><?php echo $row['prodi'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td>
                            <a href='detailmhs.php?id=<?php echo $row['idmahasiswa'] ?>' class="btn btn-info btn-sm me-1">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                            <a href='editmhs.php?id=<?php echo $row['idmahasiswa'] ?>' class="btn btn-primary btn-sm me-1">
                                <i class="bi bi-pencil"></i> Ubah
                            </a>
                            <a href='hapusmhs.php?id=<?php echo $row['idmahasiswa'] ?>' class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah Data Mahasiswa -->
        <div class="text-center">
            <button type="button" onclick="window.location.href='login.php';" class="btn btn-success add-button">
                <i class="bi bi-person-plus"></i> Tambah Data Mahasiswa
            </button>
        </div>

        <!-- Footer -->
        <footer class="text-center">
            <p>Dibuat oleh <strong>@Saripudin Sujiwo</strong></p>
        </footer>
    </div>

    <!-- Bootstrap Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.js"></script>
</body>
</html>
