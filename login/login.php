<?php
session_start();
if(isset($_SESSION['username'])):
$username=$_SESSION['username'];
header("Location:/login/admin/page");
else:
?>

<!DOCTYPE html>
<html lang="en-US">
<meta charset="utf-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<head>
<title>Login Page</title>
<link href="/login/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="linear1" class="content pattern">
<?php 
//var_dump($_GET);
?>
<fieldset>

<?php
if(isset($_GET['page'])){
if($_GET['page']=='login_error'):
?>
<span class="p" style="color: red; text-align: center;" >Maaf Password atau username salah</span>

<legend class="p" style="color:salmon;"><?=$_GET['page'];?></legend>

<?php else:?>

<?php if($_GET['page']==""):?>
<span class="p" style="color: red; text-align: center;" ><em><?=$_GET['page'];?>Anda Belum Login, silahkan login</em></span>
<legend class="p">Login page</legend>
<?php endif;endif;}?>



<form action="/login/method/script.php" method="post">
<label for="username">UserName</label>
<input type="text" name="username" id="username" class="input"><br/>
<label for="password">Password</label>
<input type="password" name="password" id="password" class="input"><br/>
<button type="submit" name="submit" class="button">SIGN IN</button>
</form>
</fieldset>

</div><!-- end of content -->

</body>
</html>

<?php endif;?>