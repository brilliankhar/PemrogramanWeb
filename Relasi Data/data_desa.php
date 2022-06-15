<h3>Tampilkan Data Kecamatan</h3>

<?php 
require "koneksi.php";

// ========================================================//
// Memanggil tabel kabupaten //
$sql = "SELECT * FROM desa, kecamatan WHERE desa.nama_kecamatan = kecamatan.id_kec";
$hasil = mysqli_query($koneksi, $sql);
$total = mysqli_num_rows($hasil);
// ========================================================//

echo "<table border='1'>\n";
echo "<tr>\n";
echo "<th>ID Desa</th>\n";
echo "<th>Nama Kecamatan</th>\n";
echo "<th>Nama Desa</th>\n";
echo "<th>Kepala Desa</th>\n";
echo "<th>Tahun Berdiri</th>\n";
//echo "<th>Hapus</th>\n";
echo "</tr>\n";

// ========================================================//
// Menampilkan data array //

while ($data = mysqli_fetch_array($hasil)){
  
  echo"<td>$data[id_desa]</td>\n";
  echo"<td>$data[nama_kecamatan]</td>\n";
  echo"<td>$data[nama_desa]</td>\n";
  echo"<td>$data[kepala_desa]</td>\n";
  echo"<td>$data[tahun_berdiri]</td>\n";
 
  echo"</tr>\n";
}
// =========================================================//
echo"</table>\n";
echo"<p>Jumlah data: <b>$total</b></p>";
?>

<a href="form_kecamatan.php">Input Data Kecamatan</a>