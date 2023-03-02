<?php session_start();
date_default_timezone_set('Asia/Bangkok');
$conn=mysqli_connect("200.100.100.1","min","1234","saleman_bie");
$userid=$_SESSION['userid'];
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$village=$_POST['village'];
$district=$_POST['district'];
$province=$_POST['province'];
$tel=$_POST['tel'];
$eid=$_POST['eid'];
$amount=$_POST['amount'];
$date=date('Y/m/d');
if($id=='' and $fname=='' and $lname=='' and $gender=='' and $dob=='' and $village=='' and $district=='' and $province=='' and 
$tel=='' and $eid=='' and $amount==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='payment.php';</script>";}
else if($fname==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຊື່');location='payment.php';</script>";}
else if($lname==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນນາມສະກຸນ');location='payment.php';</script>";}
else if($village==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນບ້ານ');location='payment.php';</script>";}
else if($district==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນເມືອງ');location='payment.php';</script>";}
else if($tel==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນເບີໂທ');location='payment.php';</script>";}
else if($amount==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນລາຄາລວມ');location='payment.php';</script>";}
else{
$insert=mysqli_query($conn,"insert into payment(fname,lname,gender,dob,village,district,province,tel,eid,amount,date,userid)values('$fname','$lname','$gender','$dob','$village','$district','$province','$tel','$eid','$amount','$date','$userid')");
if($insert){echo"ບັນທຶກສໍາເລັດ";}
else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}
?>