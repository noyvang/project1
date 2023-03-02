<?php
$conn=mysqli_connect('localhost','root','','saleman_bie');
$typeid=$_POST['typeid'];
$typename=$_POST['typename'];
$update=mysqli_query($conn,"update typeproduct set type_name='$typename' where type_id='$typeid' ");
if($update){echo"ແກ້ໄຂສໍາເລັດ";}
else{echo"ແກ້ໄຂບໍ່ສໍາເລັດ";}
?>