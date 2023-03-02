<?php
	$conn=mysqli_connect("200.100.100.1","min","1234","saleman_bie");
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from installment where dow_id='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='installment_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສໍາເລັດ');location='installment_table.php';</script>";}
?>