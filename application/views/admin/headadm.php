<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- MY FONT -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cambay|Indie+Flower|Oswald|Viga&display=swap" rel="stylesheet"> 

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/'); ?>style.css">

    <title><?= $title; ?></title>
  </head>
  <body>

  <div class="up">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container" id="navbar">
        <a class="navbar-brand" href="#">UAS-WEBPRO2-ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="<?php base_url(''); ?> admin/index">Beranda <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#datamhs">Data Mahasiswa</a>
            <a class="nav-item nav-link" href="#about">Tentang</a>
            <a class="nav-item btn btn-primary tombol" href="<?= base_url('auth/logout'); ?>">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
  </div>