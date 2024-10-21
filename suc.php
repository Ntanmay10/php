<?php

echo "<br> Username ".$_POST["u"];
echo "<br> Password ".$_POST["p"];
echo "<br> Address ".$_POST["ad"];
echo "<br> Pin code ".$_POST["pcode"];
echo "<br> Email ".$_POST["e"];
echo "<br> Birth Date ".$_POST["bd"];
echo "<br> Gender ".$_POST["g"];
echo "<br> Blood Group ".$_POST["b"];

$cn=$_POST["c"];
echo "<br> Selected Countries are:";
print_r($cn);
echo "<br> Countries are:<br>";

foreach($cn as $value)
echo "$value<br>";
$hob=$_POST["h"];
echo "<br> Hobbies are <br>";
foreach($hob as $val)
echo "$val<br>";
?>