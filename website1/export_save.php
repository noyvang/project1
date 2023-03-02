<?php session_start();
date_default_timezone_set("Asia/Bangkok");
$conn=mysqli_connect("localhost","root","","saleman_bie");
$userid=$_SESSION['userid'];
$id=$_POST['id'];
$qty=$_POST['qty'];
$bprice=$_POST['sprice'];
$amount=$_POST['amount'];
$date=date('Y/m/d');
$select=mysqli_query($conn,"select*from product where id='$id'");
while($a=mysqli_fetch_array($select)){
$z=$a['qty'];
$x=$z-$qty;
if($qty=='' and $bprice==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='export.php';</script>";}
else if($qty==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງຈຳນວນ');location='export.php';</script>";}
else if($bprice==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງລາຄາ');location='export.php';</script>";}
else{
if($qty>$z){echo"<script>alert('ສິນຄ້າຂອງທ່ານບໍ່ພຽງພໍ');location='export.php';</script>";}
else{
$update=mysqli_query($conn,"update product set qty='$x' where id='$id'");
$insert=mysqli_query($conn,"insert into export(id,qty,sprice,amount,date,userid)values('$id','$qty','$bprice','$amount','$date','$userid')");
if($insert){echo"ບັນທຶກສໍາເລັດ";}
else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}}}
?>