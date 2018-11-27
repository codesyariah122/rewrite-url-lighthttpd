
<center><font face="century gothic" size="20px">Hallo World</font></center>

<?php
$i=1;
while($i<=10){
$j=99;
echo "<ul>
<li><a href='user/$i/$j'>User $i</a></li>
</ul>";
$i++;
}

echo "<pre>";
var_dump($_SERVER['PHP_SELF']);
echo "</pre>";
