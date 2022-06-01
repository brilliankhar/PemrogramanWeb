<?php 
$password = "8098 89377467-2873";
$hasil = explode(" ", $password, 3);
echo "<br>";

echo "Password Asli = $password <br>";
echo "Bagian 1 = $hasil[0]<br>";
echo "Bagian 2 = $hasil[1]<br>";
echo "Bagian 3 = $hasil[2]<br>";
print_r($hasil);
?>