<h3>Tampilkan Data Kabupaten</h3>

<?php 
require "koneksi.php";

// ========================================================//
// Memanggil tabel kabupaten //
$sql = "SELECT * FROM kabupaten";
$hasil = mysqli_query($koneksi, $sql);
$total = mysqli_num_rows($hasil);
// ========================================================//

echo "<table border='1'>\n";
echo "<tr>\n";
echo "<th>ID Kabupaten</th>\n";
echo "<th>Nama Kabupaten</th>\n";
echo "<th>Ibukota Kabupaten</th>\n";
echo "<th>Luas Wilayah</th>\n";
echo "<th>Ubah</th>\n";
echo "<th>Hapus</th>\n";
echo "</tr>\n";

// ========================================================//
// Menampilkan data array //

while ($data = mysqli_fetch_array($hasil)){
  
  echo"<td>$data[id_kab]</td>\n";
  echo"<td>$data[nama_kabupaten]</td>\n";
  echo"<td>$data[ibukota_kabupaten]</td>\n";
  echo"<td>$data[luas_wilayah]</td>\n";
  echo"<td align='center' id='td'><a href ='form_ubah_kabupaten.php?id=$data[id_kab]'>Ubah</a></td>\n";
  echo"<td align='center' id='td'><a href ='hapus_kabupaten.php?id=$data[id_kab]' onclick=\"return confirm('Apakah anda yakin menghapus data?')\">Hapus</a></td>\n";
  echo"</tr>\n";
}
// =========================================================//
echo"</table>\n";
echo"<p>Jumlah data: <b>$total</b></p>";
?>