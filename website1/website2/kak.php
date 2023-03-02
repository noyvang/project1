<?php
$interest=$_POST['interest'];
$first=$_POST['first'];
$a=$interest*0.2;
$b=$interest*0.05;
$c=$interest*0.01;
if($first==0.2){echo $a;}
else if($first==0.05){echo $b;}
else if($first==0.01){echo $c;}
?>