<?php 

//$ts = strtotime("2001-09-11");
$ts = strtotime("now");
//$ts = strtotime("+1 day");
//$ts = strtotime("+1 week");
//$ts = strtotime("+1 hour");
//$ts = strtotime("+2 seconds");

echo $ts;
echo "<br>";
echo date("l, d/m/Y", $ts);

 ?>