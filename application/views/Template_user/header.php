<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sapi Perah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/sapilogo.png" rel="icon">
    <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->


    <!-- ======= Header ======= -->
    <header id="header" class="">
        <div class="container d-flex align-items-center">

            <a href="<?php echo base_url() . 'User/Home' ?>" class="logo me-auto"><img
                    src="<?= base_url(); ?>assets/img/logo_KAN.png" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="<?php echo base_url() . 'User/Home' ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url() . 'User/Jenis_Penyakit' ?>">Jenis
                            Penyakit Sapi</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url() . 'User/Berita' ?>">Berita</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo base_url() . 'User/Kontak' ?>">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?php echo base_url() . 'User/Login' ?>" class="appointment-btn scrollto"><span
                    class="d-none d-md-inline">LOGIN</a>
            <a href="<?php echo base_url() . 'User/Register' ?>" class="appointment-btn scrollto"><span
                    class="d-none d-md-inline">REGISTER</a>

        </div>
    </header><!-- End Header -->