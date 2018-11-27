<html lang="en">


<head>


<meta charset="utf-8">


<title></title>

<style type="text/css">

.clear {

clear:both;

}

</style>

</head>


<body>

<?php if(isset($_GET['myHome'])):?>
<fieldset><legend>Anda sedang Mengakses Halaman dengan ID: </legend>
<h2><font face="courier new"><?=$_GET['myHome'];?></font></h2>
</fieldset>
<?php endif;?>

<table border="1">


<tr>


<th>Daftar Makanan</th>


<th>Harga Makanan</th>


<th>Daftar Minuman</th>


<th>Harga Minuman</th>


</tr>


<?php 


require "Menu/menu.php";


?>


<?php 


if(isset($_REQUEST['enter'])):


$foodtype=$_POST['foodtype'];


$foodname=$_POST['foodname'];


$foodprice=(int)$_POST['foodprice'];



$drinktype=$_POST['drinktype'];


$drinkname=$_POST['drinkname'];


$drinkprice=(int)$_POST['drinkprice'];



if($foodtype	=="Daftar Makanan"):


$menu["$foodtype"][]="$foodname";


$harga["$foodtype"][]=$foodprice;


endif;



if($drinktype=="Daftar Minuman"):


$menu["$drinktype"][]="$drinkname";


$harga["$drinktype"][]=$drinkprice;	


endif;



endif;



/*


$menu["Daftar Makanan"][]="Roti Goreng";


$harga["Daftar Makanan"][]=12000;




$menu["Daftar Minuman"][]="Es Goyobod";


$harga["Daftar Minuman"][]=10000;


*/

//Daftar Makanan

/*

for($i=1;$i<=count($menu["Daftar Makanan"]);$i++):


echo "<tr>


<td>".$menu['Daftar Makanan'][$i]."</td>


<td>".$harga['Daftar Makanan'][$i]."</td>


<td>".$menu['Daftar Minuman'][$i]."</td>


<td>".$harga['Daftar Minuman'][$i]."</td>


</tr>";


endfor;

*/

foreach( $menu as $list_):

foreach( $list_ as $_):

echo "<tr><td>".$_."</td></tr>";

endforeach;

echo "<div class='clear'></div>";

endforeach;


?>


</table>


<fieldset>


<legend>


<em><b>Tambah Daftar Menu</b></em>


</legend>


<blockquote>Isi form untuk menambah daftar menu baru</blockquote>


<?php require('tambah_menu.php');?>


</fieldset>


<?php


if(isset($_GET['id'])){


$id=$_GET['id'];


echo "<script language='javascript'>alert('$id');</script>";


}


?>


<h1><?=$id;?></h1>


</body>


</html>



