<?php
require "function.php";
$namaLogo = "Up-TlawXp";
$desc = "TlawXp Uploader, upload script deface kalian di sini.";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5" name="viewport" />
    <meta name="keywords" content="Uploader, TlawXp, Up-TlawXp">
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="author" content="description">
    <meta name="TlawXp" content="Saya ganteng">
    <meta name="keywords" content="TlawXp, Tlaw, Up-TlawXp, Uploader, Upload, Deface, Script Deface">
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta property="og:site_name" content="TlawXp.rf.gd, TlawXp">
    <meta property="og:title" content="TlawXp Uploader" />
    <meta property="og:image" itemprop="image" content="img/tlaw.png">
    <meta property="og:type" content="TlawXp Uploader" />
    <meta property="og:updated_time" content="05.07" />
    <meta property="og:description" content="<?= $desc; ?>" />
    <meta name="description" content="<?= $desc; ?>" />
    <meta name="description" property="<?= $desc; ?> og:description" />
    <meta name="twitter:description" content="<?= $desc; ?>" />
    <meta name="whatsapp:description" content="<?= $desc; ?>" />
    <title><?= $namaLogo; ?></title>
    <link rel="stylesheet" href="static/sass/css/style.css">
    <!-- <link rel="stylesheet" href="static/fontawesome/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="static/fontawesome/css/fontawesome.min.css"> -->
  </head>
  <body>
    <div class="nav-bar">
      <h1><?= $namaLogo; ?></h1>
      <div class="btn2">
        <button id="btnOpen"><i class="fa fa-bars"></i></button>
      </div>
      <div class="btn">
        <a href="index.php"><i class="fa fa-users"></i></a>
        <a href="tambah.php"><i class="fa fa-upload"></i></a>
      </div>
    </div>
    <div class="bgsidebar" id="sidebar">
      <div class="sidebar">
        <header>
          <h1><?= $namaLogo; ?></h1>
          <button id="btnClose">
            <i class="fa fa-close"></i>
          </button>
        </header>
        <ul>
          <li><a href="index.php"><i class="fa fa-users"></i> Uploader</a></li>
          <li class="borderB"><a href="tambah.php" class="active"><i class="fa fa-upload"></i> Tambah data</a></li>
        </ul>
      </div>
    </div>
    <br>
    <div class="tambah">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="btn">
        <!-- cek apakah tombol submit sudah di tekan atau belum -->
        <?php if(isset($_POST["submit"])) { ?>
          <!-- cek apakah data berhasil di tambahkan atau tidak -->
          <?php if(tambah($_POST) > 0) { ?>
            <p class="succses">Data berhasil di tambahkan</p>
          <?php }else{ ?>
            <p class="danger">Data gagal di tambahakan</p>
          <?php } ?>
        <?php } ?>
        <h1>Tambah data</h1>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required autofocus autocomplete="off">
        <input type="file" name="file" id="file">
        <button type="submit" name="submit">Upload!</button>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/95173b3ff4.js" crossorigin="anonymous"></script>
    <script src="static/js/script.js"></script>
  </body>
</html>
