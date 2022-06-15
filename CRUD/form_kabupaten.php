<html>
  <title>Input Kabupaten </title>
  <body>
<h3>Form Input Kabupaten</h3>
<form method="post" action="simpan_kabupaten.php">
<table width="100%" border="0">
  <tr>
    <td width="200">Nama Kabupaten</td>
    <td><input type="text" name="nama_kabupaten" size="30" required/></td>
  </tr>
  <tr>
    <td width="200">Ibukota Kabupaten</td>
    <td><input type="text" name="ibukota_kabupaten" size="40" required/></td>
  </tr>
  <tr>
    <td width="200">Luas Wilayah</td>
    <td><input type="text" name="luas_wilayah" size="20" required/></td>
  </tr>
  <tr>
    <td><input type="hidden" name="id" value="0"/></td>
    <td><input type="submit" name="Submit" value="Simpan Data"/></td>
  </tr>
</table>
</form>
  </body>
</html>