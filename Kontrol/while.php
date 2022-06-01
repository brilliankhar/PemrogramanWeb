<?php 
$harga = 2000;
$jumlah = 10;

echo "<table border='1'>
  <tr>
    <td><b>Jumlah Barang</br></td>
    <td><b>Harga Barang</b></td>
    </tr>
";
 while ($jumlah <= 200)
 {
  echo "<tr><td>";
  echo $jumlah;
  echo "</td><td>";
  echo "Rp. ".$harga * $jumlah;
  echo "</td></tr>";
  $jumlah = $jumlah + 10;

 }

 echo "</table>";

?>