<?php
$a='data.txt';
$b=file($a);
$c=count($b);
$d=rand(0,$c);
$e=$b[$d];
echo $e;
?>
