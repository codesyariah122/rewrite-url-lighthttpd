<?php
/*if(isset($_GET['id'])){
header("location:test/".$_GET['id']);
}
*/
if(isset($_GET['id']) && (isset($_GET['uid']))){
echo "User ID : ".$_GET['id']."<br>
My Id : ".md5($_GET['uid']);

echo "<br/>
<pre>".
var_dump($_GET['id'])."
</pre>";

}