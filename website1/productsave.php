<?php
$conn=mysqli_connect("localhost","root","","saleman_bie");
$id=$_POST['id'];
$type=$_POST['type'];
$name=$_POST['name'];
$detail=$_POST['detail'];
if($type=='' and $name=='' and $detail==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='product.php';</script>";}
else if($type==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງຊື່Brand');location='product.php';</script>";}
else if($name==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງຊື່ສິນຄ້າ');location='product.php';</script>";}
else if($detail==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງລາຍລະອຽດ');location='product.php';</script>";}
else{
$insert=mysqli_query($conn,"insert into product (id,type_id,name,detail)values('$id','$type','$name','$detail')");
if($insert){echo"ບັນທຶກສໍາເລັດ";}
else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}
?>