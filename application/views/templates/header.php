<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
   

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">

    <title><?= $judul;?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
  <a class="navbar-brand" href="<?= base_url();?>home">ThirtyOne Sepatu </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="<?= base_url();?>home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="<?= base_url();?>sepatu">Data Sepatu</a>
      <a class="nav-link" href="<?= base_url();?>about">About</a>
    </div>
  </div>
      <form action="<?= base_url();?>sepatu" method="post">
        <div class="input-group ">
                <input type="text" class="form-control me-1" placeholder="Cari Data Sepatu.." name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">Cari</button>
                </div>

          </div>
        </form>
        
        <a href="<?php echo base_url('login/logout'); ?>"><button class="btn btn-success btn-xs">Logout</button></a>

  </div>
</nav>