<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/unjani/unjani_little.png" type="image/x-icon">
    <title>Universitas Jenderal Achmad Yani Online-Docs</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }
        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING</div>
    </div>
</div>

<div id="app" class="paper-loading">
    <div class="btn-fixed-top-left">
        <a href="index.php"
           class="btn-fab  btn-primary shadow1">
            <i class="icon icon-clipboard-list"></i>
        </a>
    </div>
<main class="template-genre">
    <!-- Search Section & Nav -->
    <section class="search-section home-search">
        <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
       <div class="container relative">
           <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i></i>
           </a>
           <a class="navbar-brand" href="#">
                <img class="d-inline-block align-top" alt="" src="assets/img/unjani/unjani_little.png"  width="80" height="80">
           </a>
           <div class="paper_menu">
               <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                <ul class="dl-menu align-items-center">
                    <li>
                        <a href="index.php">
                             Home
                        </a>
                    </li>
                    <li class="parent"><a href="#">Pegawai dan Dosen</a>
                        <ul class="lg-submenu">
                            <li><a href="akademik.php">Akademik</a></li>
                            <li><a href="hr.php">HR</a></li>
                            <li><a href="finance_akademik.php">Finanace Akademik</a></li>
                        </ul> 
                    </li>
                    <li>
                        <a href="mahasiswa.php">
                             Mahasiswa
                        </a>
                    </li>
                </ul>
            </div>
<!-- Login modal -->
           </div>
       </div>
    </nav>
        <div class="masthead text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-md-auto">
                        <h1>Universitas Jenderal Achmad Yani</h1>
                    </div>
                </div>
            </div>
        </div>c
    </section>
    <!-- Genre -->
    <section id="genre" class="genre">
        <div class="container">
            <header class="text-center">
                <h2>Manual Book</h2>
                <div class="section-subtitle">Aplikasi Siterpadu Universitas Jenderal Achmad Yani
                </div>
            </header>
            <div class="row p-t-b-80">
                <div class="text-center col-xl-4">
                    <div class="media-body"><span class="icon"><img src="assets/img/icon/icon1.png" alt=""></span>
                        <h3 class="p-t-b-20">Modul Akademik</h3>
                        <p> Modul untuk aktivitas akademik pada Universitas Jenderal Achmad Yani
                        </p>
                        <a href="akademik.php" class="card-link">Go to...</a>
                    </div>
                </div>
                <div class="text-center col-xl-4">
                    <div class="media-body"><span class="icon"><img src="assets/img/icon/icon3.png" alt=""></span>
                        <h3 class="p-t-b-20">Modul HR</h3>
                        <p> Modul untuk kelola data pegawai pada Universitas Jenderal Achmad Yani.
                        </p>
                        <a href="hr.php" class="card-link">Go to...</a>
                    </div>
                </div>
                <div class="text-center col-xl-4">
                    <div class="media-body"><span class="icon"><img src="assets/img/icon/icon-files.png" alt=""></span>
                        <h3 class="p-t-b-20">Modul Finance Akademik</h3>
                        <p> Modul untuk kelola data keuangan akademik pada Universitas Jenderal Achmad Yani</p>
                        <a href="finance_akademik.php" class="card-link">Go to...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action -->
    <section class="section">
        <div class="container">
            <div class="row call-to-action">
                <div class="col-xl-1"><span class="icon icon-envelope-line"></span>
                </div>
                <div class="col-xl-9">
                    <h3>Contact Us</h3>
                    <p>If you have question about aplikasi Siterpadu, please contact humas@unjani.ac.id</p>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class=" col-lg-2 col-xl-3 col-12 responsive-phone"><a href="#" class="brand">
                <img src="assets/img/unjani/unjani_little.png" alt="Knowledge">
                <span class="circle"></span>
            </a>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Modul Akademik</h6>
                <ul class="footer-links">
                    <li><a>Manajemen Kurikulum dan Matakuliah</a></li>
                    <li><a>Registrasi Mahasiswa Baru</a></li>
                    <li><a>Pengambilan Matakuliah</a></li>
                    <li><a>Perwalian</a></li>
                    <li><a>Kartu Studi Mahasiswa</a></li>
                    <li><a>Penjadwalan Ujian</a></li>
                </ul>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Modul Finance Akademik</h6>
                <ul class="footer-links">
                    <li><a>Pembangkit Tagihan Biaya Pendidikan</a></li>
                    <li><a>Pembayaran Biaya Pendidikan</a></li>
                    <li><a>Kuitansi dan Historikal Pembayaran</a></li>
                </ul>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Modul HR</h6>
                <ul class="footer-links">
                    <li><a>Manajemen Struktur Organisasi</a></li>
                    <li><a>Pemetaan Lokasi Kerja</a></li>
                    <li><a>Pemtaan Posisi dan Jabatan</a></li>
                    <li><a>Pemetaan Home Base Dosen</a></li>
                    <li><a>Manajemen Data Master Pegawai</a></li>
                    <li><a>Manajamen Lowongan Pekerjaan</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-12 col-12 col-xl-3 responsive-phone">
                <h6>Universitas Jenderal Achmad Yani</h6>
                <div class="copyrights">
                    <p> PUSSISFO &#xA9; Copyright 2020 - UNJANI - All Rights Reserved - Powered by BTP</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!--End Page page_wrrapper -->
<script src="assets/js/app.js"></script>

</body>
</html>