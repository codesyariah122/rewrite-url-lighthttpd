<?php
session_start();
if(isset($_SESSION['username'])):
$username=$_SESSION['username'];
$password=$_SESSION['password'];
require 'time.php';
?>

<h1>
<?=$text." ".$username;?> 
<?=$password;?>
</h1>

<?php 
else:
header("Location:/login/");
endif;
?>
<form action="" method="POST">

<?php
$action=["process","disk"];
$action[]="ip route";
$action[]="netstat";
?>
<?php $i=0;do{?>
<tr>
<td>
<button type="submit" name="check"  value="<?=$action[$i];?>"><?=$action[$i];?>&nbsp;Device</button>
</td>
</tr>
<?php $i++;}while($i<=count($action)-1);
?>

</form>

<?php
if(isset($_POST['check'])):
switch($_REQUEST['check']):
case($action[0]):
echo "<h1><font face='courier new'>$action[0]</font></h1>";

echo "<pre>";
echo "<font face='courier new'>".shell_exec('ps a')."</font>";
echo "</pre>";
?>
<form action="" method="post">
<button type="submit" name="clear">CLEAR</button>
</form>
<?php
break;
case($action[1]):
echo "<h1><font face='courier new'>".$action[1]."</font></h1>";
echo "<pre>";
echo shell_exec("df");
echo "</pre>";
?>
<form action="" method="post">
<button type="submit" name="clear">CLEAR</button>
</form>
<?php
break;
case($action[2]):
echo "<h1><font face='courier new'>".$action[2]."</font></h1>";
echo "<pre>";
echo shell_exec("ip route show");
echo "</pre>";
?>
<form action="" method="post">
<button type="submit" name="clear">CLEAR</button>
</form>
<?php
break;
case($action[3]):
echo "<h1><font face='courier new'>".$action[3]."</font></h1>";
echo "<pre>";
echo shell_exec("netstat");
echo "</pre>";
?>
<form action="" method="post">
<button type="submit" name="clear">CLEAR</button>
</form>
<?php
break;
default:
die("error bro");
endswitch;//action
?>

<?php 
if(isset($_REQUEST['clear'])):
echo shell_exec("clear");
endif;//clear
endif;//isset enter
?>
<?php $i=0;do{echo "<br>";$i++;}while($i<=10);?>

<h1><a href="/login/logout.php">Sign Out</a></h1>

