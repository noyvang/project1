<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from user where userid='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='user_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສຳເລັດ');location='user_table.php';</script>";}
?>