<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from typeproduct where type_id='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='typeproduct_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສຳເລັດ');location='typeproduct_table.php';</script>";}
?>