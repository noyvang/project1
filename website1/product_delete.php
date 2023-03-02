<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from product where id='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='product_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສຳເລັດ');location='product_table.php';</script>";}
?>