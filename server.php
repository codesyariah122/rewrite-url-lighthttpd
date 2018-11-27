<!DOCTYPE html>


<html lang="en-US">


<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1">


<head>

<link href="style.css" rel="stylesheet" type="text/css">

<?php if(isset($_GET['page'])):?>

<title>
<?=$_GET['page'];?>
</title>

<?php else:?>

<title>
<?=$_SERVER['GATEWAY_INTERFACE'];?>
</title>

<?php endif;?>

</head>

<body>

<div class="bg">

<?php if(isset($_GET['page'])):?>

<fieldset><legend><a href="<?=$_SERVER['SCRIPT_NAME'];?>"><?=$_SERVER['SERVER_SOFTWARE'];?></a></legend>

<p><b><font face="courier new" size="4px">Request Method : </b>

<?=$_SERVER['REQUEST_METHOD'];?>

</font></p>

<?php 
$URI=$_SERVER['SERVER_SOFTWARE'];
if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == ""):?>

<p><b><font face="courier new" size="4px" weight="bold">Halaman AntarMuka dari Webserver :</b> 

<?=$URI;?></font></p>

<?php else:?>

<p><b><font face="courier new" size="4px">Anda Mengakses Halaman :</b>

<?=$_GET['page'];?>
</font></p>

<?php endif;?>

</fieldset>

<?php endif;?>
</div>

</body>

</html>