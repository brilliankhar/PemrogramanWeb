<?php 
require "koneksi.php";

$id=$_GET['id'];

$sql= "DELETE FROM kabupaten WHERE id_kabupaten='$id'";
$hasil = mysqli_query($koneksi,$sql);
if ($hasil) {
  echo "<script language='javascript'> alert('Proses Hapus Data Berhasil');
  window.open('data_kabupaten.php','_top')</script>";
}else{
  echo "<script language='javascript'> alert('Proses Hapus Data Gagal');
  window.open('data_kabupaten.php','_top')</script>";
}
?>