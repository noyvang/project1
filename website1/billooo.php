<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$id=$_POST['id'];
$de=mysqli_query($conn,"update payment set remark='payed' where pay_id='$id'");
if($de){echo"Done";}
else{echo"Not";}
?>