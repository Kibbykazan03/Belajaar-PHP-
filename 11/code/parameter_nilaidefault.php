<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Abeey", "Hi");

echo "<hr>";

$saya = "Kibby";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>