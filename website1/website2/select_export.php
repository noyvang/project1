<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$id=$_POST['id'];
$getid=mysqli_query($conn,"select sprice from product where id='$id' ");
$row=mysqli_fetch_row($getid);
echo $row[0];
?>