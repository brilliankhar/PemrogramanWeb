<?php 
$password = "1234567890";

$posisi = strpos($password, "5");
echo "Karakter 5 berada dalam index string ke $posisi";
echo "<br>";
var_dump($posisi);
echo "<br>";
var_dump($password);

?>