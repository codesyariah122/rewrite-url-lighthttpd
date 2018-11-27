<?php


$menu=["Daftar Makanan"=>

[

1=>"Cuanki",

2=>"Cuanki Indomie",

3=>"Cuanki Batagor",

4=>"Batagor(kuah&kacang)",

5=>"Siomay(kuah&kacang)",

6=>"Bakso",

7=>"Siomay Bakso",

8=>"Batagor Bakso",

9=>"Nasi Goreng",

10=>"Spicy Wings"

],


"Daftar Minuman"=>

[

1=>"Teh Manis(dingin&panas)",

2=>"Es Teh Tawar",

3=>"Lemon Tea(dingin&panas)",

4=>"Lychee Tea(dingin&panas)",

5=>"Milkshake(strawbery,vanila,coklat)",

6=>"GreenTea(creamy)",

7=>"GreenTea(spring)",

8=>"Es Jeruk",

9=>"Capuchino Float",

10=>"Es Kopi"


],

"Harga Makanan"=>[

1=>15000,

2=>20000,

3=>23000,

4=>18000,

5=>20000,

6=>15000,

7=>20000,

8=>18000,

9=>20000,

10=>20000

],

"Harga Minuman"=>[

1=>5000,

2=>3000,

3=>10000,

4=>10000,

5=>15000,

6=>15000,

7=>17000,

8=>10000,

9=>15000,

10=>10000

]];

/*

if(isset($_POST['enter'])):

$tipe=$_POST['tipe'];

$foodname=$_POST['foodname'];

$price=$_POST['price'];


if($tipe!=="--"){

if($tipe==="Daftar Makanan"){

$menu[$tipe][]=$foodname;

$harga[$tipe][]=$price;

}else if($tipe=="Daftar Minuman"){

$menu[$tipe][]=$foodname;

$harga[$tipe][]=$price;

}

}else{

echo "<script language='javascript'>alert('Mohon Form input di isi sesuai data yang berlaku');</script>";

}


endif;

*/


