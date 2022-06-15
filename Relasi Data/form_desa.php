<html>
  <title>Input Desa </title>
  <body>
<h3>Form Input Desa</h3>
<form method="post" action="simpan_desa.php">
<table width="100%" border="0">
<tr>
    <td width="200">Kecamatan</td>
    <td>
    <select name="id_kec">
      <option value="-">Pilih</option>
      <?php
      include "koneksi.php";
      
      $hasil = mysqli_query($koneksi, "SELECT * FROM kecamatan") or die ("Query Gagal");
      while
      ($hasil1 = mysqli_fetch_array($hasil))
      {
        echo "<option value = \"". $hasil1['id_kec']."\">" .$hasil1['nama_kecamatan']. "</option>";
      }
      ?>
    </select>  
  </tr> 
<tr>
    <td width="200">Nama Desa</td>
    <td><input type="text" name="nama_desa" size="30"/></td>
  </tr>
  <tr>
    <td width="200">Kepala Desa</td>
    <td><input type="text" name="kepala_desa" size="30"/></td>
  </tr>
  <tr>
    <td width="200">Tahun Beridir</td>
    <td><input type="text" name="tahun_berdiri" size="4"/></td>
  </tr>
  <tr>
    <td><input type="hidden" name="id" value="0"/></td>
    <td><input type="submit" name="Submit" value="Simpan Data"/></td>
  </tr>
</table>
</form>
<a href="form_kabupaten.php">Input Data Kabupaten</a>
<a href="form_kecamatan.php">Input Data Kecamatan</a>
<a href="#">Input Data Desa</a>
  </body>
</html>