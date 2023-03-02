<?php session_start(); 
date_default_timezone_set("Asia/Bangkok");
$conn=mysqli_connect("localhost","root","","saleman_bie");
$userid=$_SESSION['userid'];
$id=$_POST['id'];
$qty=$_POST['qty'];
$bprice=$_POST['bprice'];
$amount=$_POST['amount'];
$date=date("Y/m/d");
$select=mysqli_query($conn,"select*from product where id='$id'");
while($a=mysqli_fetch_array($select)){
$z=$a['qty'];
$i=($bprice*0.5)+$bprice;
$x=$qty+$z;
$o=$bprice;
if($qty=='' and $bprice==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='receives.php';</script>";}
else if($qty==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງຈຳນວນ');location='receives.php';</script>";}
else if($bprice==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງລາຄາ');location='receives.php';</script>";}
else{
$insert=mysqli_query($conn,"insert into receives(id,qty,bprice,amount,date,userid)values('$id','$qty','$bprice','$amount','$date','$userid')");
$update=mysqli_query($conn,"update product set qty='$x',bprice='$o',sprice='$i' where id='$id'");
if($insert){echo"ບັນທຶກສໍາເລັດ";}
else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}}
?>