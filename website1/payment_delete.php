<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from payment where pay_id='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='payment_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສໍາເລັດ');location='payment_table.php';</script>";}
?>