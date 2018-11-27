<?php
session_start();
$user="admin";
$pass=123;
$username=$_POST['username'];
$password=password_hash($_POST['password']);
if($username==$user AND $password==password_verify($pass)):
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header("Location:/login/admin/page");

else:
echo "
<script language='javascript'>
window.location.href='/login/login/login_error';
</script>";
endif;

