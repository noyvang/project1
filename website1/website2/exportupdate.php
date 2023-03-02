<?php
$conn=mysqli_connect("200.100.100.1","min","1234","saleman_bie");
$idd=$_POST['idd'];
$id=$_POST['id'];
$qty=$_POST['qty'];
$sprice=$_POST['sprice'];
$amount=$_POST['amount'];
$date=$_POST['date'];
$update=mysqli_query($conn,"update export set id='$id',qty='$qty',sprice='$sprice',amount='$amount',date='$date' where eid='$idd' ");
if($update){echo"ແກ້ໄຂສໍາເລັດ";}
else{echo"ແກ້ໄຂບໍ່ສໍາເລັດ";}
?>