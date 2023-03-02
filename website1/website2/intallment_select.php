<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$eid=$_POST['id'];
$select=mysqli_query($conn,"select amount from export where eid='$eid' ");
$row=mysqli_fetch_row($select);
echo $row[0];
?>