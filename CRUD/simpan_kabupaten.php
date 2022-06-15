<?php 
require "koneksi.php";

$Nama_kabupaten = $_POST['nama_kabupaten'];
$Ibukota_kabupaten = $_POST['ibukota_kabupaten'];
$Luas_wilayah = $_POST['luas_wilayah'];

$sql = "INSERT INTO kabupaten
(
  id_kabupaten,
  nama_kabupaten,
  ibukota_kabupaten,
  luas_wilayah
)
VALUES
(
  NULL,
  '$Nama_kabupaten',
  '$Ibukota_kabupaten',
  '$Luas_wilayah'
)";

$hasil=mysqli_query($koneksi,$sql);

echo "<script>window.location='data_kabupaten.php'</script>";
/*otentikasi data tersimpan
if($hasil){
  echo "<script language='javascript'>alert('Proses simpan data Berhasil');
  window.open('data_kabupaten.php','_top')</script>";
}else{
  echo "<script language='javascript'>alert('Proses simpan data Gagal');
  window.open('form_kabupaten.php','_top')</script>";
}*/

?>