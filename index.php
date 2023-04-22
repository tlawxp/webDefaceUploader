<?php
require "function.php";
$dbTabelConn = query("SELECT * FROM uploader ORDER BY id DESC");
$namaLogo = "Up-TlawXp";
$desc = "TlawXp Uploader, upload script deface kalian di sini.";
// tombol cari di tekam
if(isset($_POST["cari"])){
  $dbTabelConn = cari($_POST["keyword"]);
}
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
    <!-- <link rel="stylesheet" href="static/fontawesome/css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="static/fontawesome/css/all.min.css"> -->
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
          <li><a href="index.php" class="active"><i class="fa fa-users"></i> Uploader</a></li>
          <li class="borderB"><a href="tambah.php"><i class="fa fa-upload"></i> Tambah data</a></li>
        </ul>
      </div>
    </div>
    <br>
    <div class="container">
      <h1>uploader</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="keyword" placeholder="Cari sekarang" autocomplete="off" autofocus>
        <button type="submit" name="cari"><i class="fa fa-search"></i></button>
        <table cellspacing="0">
          <tr>
            <td>No.</td>
            <td>Pilih</td>
            <td><i class="fa fa-file-alt"></i> File</td>
            <td><i class="fa fa-tag"></i> Nama</td>
          </tr>
          <?php $i = 1; ?>
          <?php foreach($dbTabelConn as $conn) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="static/file/<?= $conn["file"]; ?>">Lihat</a>
              <!-- <a href="#"><i class="fa fa-download"></i></a> -->
            </td>
            <td><?= $conn["file"]; ?></td>
            <td><?= $conn["nama"]; ?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </form>
    </div>
    <script src="https://kit.fontawesome.com/95173b3ff4.js" crossorigin="anonymous"></script>
    <script src="static/js/script.js"></script>
  </body>
</html>
