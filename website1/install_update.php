<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$id=$_POST['id'];
$still=$_POST['still'];
$update=mysqli_query($conn,"update installment set owe='$still' where dow_id='$id'");
if($update){echo"ແກ້ໄຂສໍາເລັດ";}
else{echo"ແກ້ໄຂບໍ່ສໍາເລັດ";}
?>