<?php
$conn=mysqli_connect("200.100.100.1","min","1234","saleman_bie");
$idd=$_POST['idd'];
$id=$_POST['id'];
$qty=$_POST['qty'];
$bprice=$_POST['bprice'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$update=mysqli_query($conn,"update receives set id='$id',qty='$qty',bprice='$bprice',amount='$amount',date='$date' where rid='$idd' ");
if($update){echo"ແກ້ໄຂສໍາເລັດ";}
else{echo"ແກ້ໄຂບໍ່ສໍາເລັດ";}
?>