<?php 
function Kalikan($x, $y)
{
  $hasil = $x * $y;
  return $hasil;
}

$bil = 0;
echo "Nilai bil mula-mula adalah ". $bil ."<br>";
$bil = Kalikan(5,4);
echo "Nilai bil setelah memanggil function adalah" . $bil ."<br>";
?>