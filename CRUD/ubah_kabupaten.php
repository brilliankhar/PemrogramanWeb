<?php 
require "koneksi.php";

$id = $_POST['id_kabupaten'];
$Nama_kabupaten = $_POST['nama_kabupaten'];
$Ibukota_kabupaten = $_POST['ibukota_kabupaten'];
$Luas_wilayah = $_POST['luas_wilayah'];

// Proses ubah data pada tabel Kabupaten

$sql = "UPDATE kabupaten SET nama_kabupaten='$Nama_kabupaten',ibukota_kabupaten='$Ibukota_kabupaten',luas_wilayah='$Luas_wilayah' WHERE id_kabupaten = '$id'";
$hasil = mysqli_query($koneksi, $sql);

//======================================================//
/*if ($hasil) {
  echo "<script language='javascript'> 
  alert('Proses Ubah Data Berhasil');
  window.open('data_kabupaten.php','_top')</script>";
}else{
  echo "<script language='javascript'> 
  alert('Proses Ubah Data Gagal');
  window.open('data_kabupaten.php','_top')</script>";
}*/
?>