<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$type_id=$_POST['typeid'];
$select=mysqli_query($conn,"select id,name from product where type_id='$type_id'");
while($a=mysqli_fetch_array($select)){
	echo"<option value='$a[0]'>$a[1]</option>";
}
?>