<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$id=$_POST['id'];
$select=mysqli_query($conn,"select qty from product where id='$id'");
$row=mysqli_fetch_row($select);
echo $row[0];
?>