<?php
function perkenalan($nama, $salam = "Assalamu'alaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
}

// memanggil dungsi yang sudah dibuat
perkenalan("Jarwo", "Hi");

echo "<hr>";

$saya = "Bambang";
$ucapanSalam = "Selamat pagi";

// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
?>