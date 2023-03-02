<?php
$conn=mysqli_connect("200.100.100.1","min","1234","saleman_bie");
$id=$_POST['id'];
$type=$_POST['type'];
$name=$_POST['name'];
$detail=$_POST['detail'];
$qty=$_POST['qty'];
$bprice=$_POST['bprice'];
$sprice=$_POST['sprice'];
$update=mysqli_query($conn,"update product set type_id='$type',name='$name',detail='$detail',qty='$qty',bprice='$bprice',sprice='$sprice' where id='$id' ");
if($update){echo"ແກ້ໄຂສໍາເລັດ";}
else{echo"ແກ້ໄຂບໍ່ສໍາເລັດ";}
?>