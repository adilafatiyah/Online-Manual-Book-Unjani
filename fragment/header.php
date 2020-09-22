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
<main class="page">
    <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
       <div class="container relative">
           <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i></i>
           </a>
           <a class="navbar-brand" href="index.php">
               <img class="d-inline-block align-top" alt="" src="assets/img/unjani/unjani_little.png" width="80" height="80">
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
                            <li><a href="finance_akademik.php">Finance Akademik</a></li>
                            <li><a href="hr.php">HR</a></li>
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