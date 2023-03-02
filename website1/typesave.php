<?php

$conn=mysqli_connect('localhost','root','','saleman_bie');
$typeid=$_POST['typeid'];
$typename=$_POST['typename'];
$select=mysqli_query($conn,"select * from typeproduct where type_name='$typename'");
$a=mysqli_fetch_array($select);
$o=$a['type_name'];
if($typename==$o){echo"<script>alert('ຂໍ້ມູນຊໍ້າກັນ ກະລຸນາປ້ອນຂໍ້ມູນໃໝ່');location='typeproduct.php';</script>";}
else if($typename==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='typeproduct.php';</script>";}
else{
$insert=mysqli_query($conn,"insert into typeproduct values('$typeid','$typename')");
if($insert){echo"ບັນທຶກສໍາເລັດ";}
else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}
?>