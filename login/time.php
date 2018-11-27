<?php
$time = date("H");

$timezone = date("e");
//echo $time."<br/>";

if ($time < "10") { 
$text="Selamat Pagi";
} else

if ($time >= "10" && $time < "15") { 
$text="Selamat Siang";
} else

if ($time >= "15" && $time < "19") { 
$text="Selamat Sore";
 } else

if ($time >= "19") { 
$text="Selamat Malam";
}

