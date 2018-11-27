<?php
$time = date("H");

$timezone = date("e");
echo $time."<br/>";

if ($time < "10") { echo "Selamat Pagi"; } else

if ($time >= "10" && $time < "15") { echo "Selamat Siang"; } else

if ($time >= "15" && $time < "19") { echo "Selamat Sore"; } else

if ($time >= "19") { echo "Selamat Malam"; }

