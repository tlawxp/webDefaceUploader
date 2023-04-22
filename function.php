<?php
// koneksi kedatabase
$host = "127.0.0.1";
$user = "root";
$password = "tlawxp";
$db = "deface";
$conn = mysqli_connect($host,$user,$password,$db);
function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data){
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $file = upload();
  // jika bukan file upload digagalkam
  if(!$file){
    return false;
  }
  // mengihutung jumlah huruf karakter
  if(strlen($nama) > 20){
    return false;
  }
  $query = "INSERT INTO uploader VALUES (NULL,'$nama','$file')";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
function upload(){
  $namaFile = $_FILES["file"]["name"]; 
  $error = $_FILES["file"]["error"];
  $tmpName = $_FILES["file"]["tmp_name"];
  // cek apakah file tidak ada yang di upload
  if($error === 4){
    return false;
  }
  // cek apakah yang di upload adalah file
  $extensiFileValid = ["html"];
  $extensiFile = explode(".","$namaFile");
  $extensiFile = strtolower(end($extensiFile));
  if(!in_array($extensiFile,$extensiFileValid)){
    return false;
  }

  // lolos pengecekan, file siap di upload
  // generate nama file baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $extensiFile;
  move_uploaded_file($tmpName,"static/file/".$namaFileBaru);
  return $namaFileBaru;
}
function cari($keyword){
  $query = ("SELECT * FROM uploader WHERE
  nama LIKE '%$keyword%' OR
  file LIKE '%$keyword%' 
  ORDER BY id DESC
  ");
  return query($query);
}
?>
