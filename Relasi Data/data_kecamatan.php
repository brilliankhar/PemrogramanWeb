<h3>Tampilkan Data Kecamatan</h3>

<?php 
require "koneksi.php";

// ========================================================//
// Memanggil tabel kabupaten //
$sql = "SELECT * FROM kecamatan, kabupaten WHERE kecamatan.nama_kabupaten = kabupaten.id_kab";
$hasil = mysqli_query($koneksi, $sql);
$total = mysqli_num_rows($hasil);
// ========================================================//

echo "<table border='1'>\n";
echo "<tr>\n";
echo "<th>ID Kecamatan</th>\n";
echo "<th>Nama Kecamatan</th>\n";
echo "<th>Jumlah Desa</th>\n";
echo "<th>Nama Kabupaten</th>\n";
echo "<th>Ibukota Kabupaten</th>\n";
//echo "<th>Hapus</th>\n";
echo "</tr>\n";

// ========================================================//
// Menampilkan data array //

while ($data = mysqli_fetch_array($hasil)){
  
  echo"<td>$data[id_kec]</td>\n";
  echo"<td>$data[nama_kecamatan]</td>\n";
  echo"<td>$data[jumlah_desa]</td>\n";
  echo"<td>$data[nama_kabupaten]</td>\n";
  echo"<td>$data[ibukota_kabupaten]</td>\n";
 
  echo"</tr>\n";
}
// =========================================================//
echo"</table>\n";
echo"<p>Jumlah data: <b>$total</b></p>";
?>

<a href="form_kecamatan.php">Input Data Kecamatan</a>