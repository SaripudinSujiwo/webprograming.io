<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk mengambil data mahasiswa berdasarkan ID
    $query = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE idmahasiswa = '$id'");
    
    // Mengecek apakah data mahasiswa dengan ID tersebut ditemukan
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
    } else {
        echo "Data mahasiswa tidak ditemukan.";
        exit;
    }
} else {
    echo "ID mahasiswa tidak tersedia di URL.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #00c4cc, #0a1a44);
            color: #333;
            padding: 20px;
            overflow-x: hidden;
        }

        .container {
            max-width: 500px;
            padding: 40px 30px;
            background: rgba(0, 0, 0, 0.1); /* Mengurangi opacity untuk lebih transparan */
            border-radius: 15px;
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            color: #ffffff;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.8); /* Menambah intensitas shadow untuk efek hover */
        }

        

        .profile-pic {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #6a1b9a;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s;
            cursor: pointer;
        }

        .profile-pic:hover {
            transform: scale(1.4);
            box-shadow: 0 12px 20px rgba(106, 27, 154, 0.3);
        }

        .profile-info h2 {
            font-size: 1.8em;
            margin: 10px 0;
            font-weight: bold;
        }

        .profile-info p {
            margin: 8px 0;
            font-size: 1em;
            color: #cccccc;
        }

        .profile-info strong {
            color: #00c4cc;
            font-weight: bold;
        }

        .back-link {
            margin-top: 20px;
        }

        .back-link a {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1em;
            color: #fff;
            background: #6a1b9a;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s, transform 0.3s;
        }

        .back-link a:hover {
            background: #4a148c;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(106, 27, 154, 0.4);
        }

        /* Responsiveness */
        @media (max-width: 600px) {
            .container {
                padding: 20px 15px;
                max-width: 100%;
            }

            .profile-info h2 {
                font-size: 1.5em;
            }

            .profile-info p {
                font-size: 0.9em;
            }

            .back-link a {
                padding: 10px 20px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>

<div class="container" id="container">
    <img src="img/<?php echo $data['image']; ?>" alt="Foto Mahasiswa" class="profile-pic" onclick="showProfileEffect()"> <!-- Path gambar foto mahasiswa -->

    <div class="profile-info" id="profile-info">
        <h2><?php echo $data['nama']; ?></h2>
        <p><strong>NIM:</strong> <?php echo $data['NIM']; ?></p>
        <p><strong>Jenis Kelamin:</strong> <?php echo $data['jeniskelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan'; ?></p>
        <p><strong>Program Studi:</strong> <?php echo $data['prodi']; ?></p>
        <p><strong>Alamat:</strong> <?php echo $data['alamat']; ?></p>

        <p><?php echo $data['nama']; ?> adalah seorang mahasiswa di program studi <?php echo $data['prodi']; ?>. 
           Berasal dari <?php echo $data['alamat']; ?>, <?php echo $data['jeniskelamin'] == 'L' ? 'dia' : 'ia'; ?> 
           adalah mahasiswa yang rajin dan selalu berusaha untuk mencapai prestasi terbaiknya.</p>
    </div>

    <div class="back-link">
        <a href="mahasiswa.php">Kembali ke Daftar Mahasiswa</a>
    </div>
</div>

<script>
    // Efek JavaScript untuk mempercantik tampilan profile
    function showProfileEffect() {
        const container = document.getElementById('container');
        container.style.transform = 'scale(1.05)';
        container.style.transition = 'transform 0.5s ease';
        setTimeout(() => {
            container.style.transform = 'scale(1)';
        }, 500);
    }
</script>

</body>
</html>
