<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$id=$_GET['id'];
	$delete=mysqli_query($conn,"delete from export where eid='$id'");
	if($delete){echo"<script>alert('ລົບສຳເລັດ');location='export_table.php';</script>";}
	else{echo"<script>alert('ລົບບໍ່ສໍາເລັດ');location='export_table.php';</script>";}
?>