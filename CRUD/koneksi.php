<?php 
$koneksi = mysqli_connect("localhost", "root", "") 
or die(mysqli_connect_errno($koneksi));
//echo "Koneksi ke MYSQL Sukses<br>";

mysqli_select_db($koneksi, 'kabupaten_db')
or die(mysqli_error($koneksi));
//echo "koneksi database berhasil";
?>