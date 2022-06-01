<?php 
$harga = 1500;


echo "<table border='1'>
  <tr>
    <td><b>Jumlah Barang</br></td>
    <td><b>Harga Barang</b></td>
    </tr>
";
 for ($jumlah = 20; $jumlah <= 400; $jumlah += 20)
 {
  echo "<tr><td>";
  echo $jumlah;
  echo "</td><td>";
  echo "Rp. ".$harga * $jumlah;
  echo "</td></tr>";
 
 }

 echo "</table>";

?>