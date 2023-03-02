<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$id=$_POST['typeid'];
$select=mysqli_query($conn,"select p.name from typeproduct as t,product as p where t.type_id=p.type_id and p.type_id='$id' ");
while($row=mysqli_fetch_array($select)){
echo $row['name'];}
?>