<?php 
require "koneksi.php";
//$id=$_GET['id_kabupaten'];
$id = '';
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
$sql="SELECT * FROM kabupaten WHERE id_kabupaten='$id'";
$hasil=mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($hasil);
?>

  <title>Ubah Data Kabupaten </title>

<h3>Form Ubah Kabupaten</h3>
<form method="POST" action="ubah_kabupaten.php">
<table width="600" border="0">
  <tr>
    <td width="157">Nama Kabupaten</td>
    <td width="433"><input type="text" name="nama_kabupaten" size="30" value="<?php echo $data['nama_kabupaten'];?>"/></td>
  </tr>
  <tr>
    <td width="200">Ibukota Kabupaten</td>
    <td><input type="text" name="ibukota_kabupaten" size="40" value="<?php echo $data['ibukota_kabupaten'];?>"/></td>
  </tr>
  <tr>
    <td width="200">Luas Wilayah</td>
    <td><input type="text" name="luas_wilayah" size="20" value="<?php echo $data['luas_wilayah'];?>"/></td>
  </tr>
  <tr>
    <td><input type="hidden" name="id" value="<?php echo $id;?>"/></td>
    <td><input type="submit" name="Submit" value="Simpan Data"/></td>
  </tr>
</table>
</form>

