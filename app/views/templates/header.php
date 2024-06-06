<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href=" <?= BASEURL; ?> /css/bootstrap.css">
    <link rel="stylesheet" href=" <?= BASEURL; ?> /css/<?= $data['css']; ?>.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <!-- Logo di sebelah kiri -->
            <a class="navbar-brand" href=" <?= BASEURL; ?>">
                <img src="<?= BASEURL; ?>/img/client/Beranda/logo.png" alt="Logo">
            </a>

            <!-- Tombol toggler untuk responsif -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Daftar navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- ms-auto menggeser elemen ke kanan -->
                    <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                        <a class="nav-link" href=" <?= BASEURL; ?>/home">Beranda</a> 
                    </li>
                    <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                        <a class="nav-link" href="<?= BASEURL; ?>/about">Tentang Kami</a>
                    </li>
                    <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                        <a class="nav-link" href="<?= BASEURL; ?>/cari">Cari panti</a>
                    </li>
                    <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                        <a class="nav-link" href="<?= BASEURL; ?>/kabar">Kabar Panti</a>
                    </li>
                    <li class="nav-item me-3"> <!-- Menambahkan margin ke kanan -->
                        <a class="nav-link" href="<?= BASEURL; ?>/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>