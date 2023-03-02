<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from receives where rid='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='receives_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສຳເລັດ');location='receives_table.php';</script>";}
?>