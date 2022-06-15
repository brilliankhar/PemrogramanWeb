<html>
  <title>Input Kecamatan </title>
  <body>
<h3>Form Input Kecamatan</h3>
<form method="post" action="simpan_kecamatan.php">
<table width="100%" border="0">
  <tr>
    <td width="200">Nama Kecamatan</td>
    <td><input type="text" name="nama_kecamatan" size="30"/></td>
  </tr>
  <tr>
    <td width="200">Jumlah desa</td>
    <td><input type="text" name="jumlah_desa" size="40"/></td>
  </tr>
  <tr>
    <td width="200">Kabupaten</td>
    <td>
    <select name="id_kab">
      <option value="-">Pilih</option>
      <?php
      include "koneksi.php";
      
      $hasil = mysqli_query($koneksi, "SELECT * FROM kabupaten") or die ("Query Gagal");
      while
      ($hasil1 = mysqli_fetch_array($hasil))
      {
        echo "<option value = \"". $hasil1['id_kab']."\">" .$hasil1['nama_kabupaten']. "</option>";
      }
      ?>
    </select>  
  </tr>
  <tr>
    <td><input type="hidden" name="id" value="0"/></td>
    <td><input type="submit" name="Submit" value="Simpan Data"/></td>
  </tr>
</table>
</form>
<a href="form_kabupaten.php">Input Data Kabupaten</a>
<a href="#">Input Data Kecamatan</a>
<a href="form_desa.php">Input Data Desa</a>
  </body>
</html>