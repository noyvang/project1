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
$first=$_POST['first'];
$interest=$_POST['interest'];
$all=$_POST['alls'];
$owe=$_POST['owe'];
$date=date('Y/m/d');
if($id=='' and $fname=='' and $lname=='' and $gender=='' and $dob=='' and $village=='' and $district=='' and $province=='' and 
$tel=='' and $eid=='' and $amount=='' and $first=='' and $interest=='' and $all=='' and $owe==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='installment.php';</script>";}
else if($fname==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຊື່');location='installment.php';</script>";}
else if($lname==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນນາມສະກຸນ');location='installment.php';</script>";}
else if($village==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນບ້ານ');location='installment.php';</script>";}
else if($district==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນເມືອງ');location='installment.php';</script>";}
else if($tel==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນເບີໂທ');location='installment.php';</script>";}
else if($amount==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນລາຄາລວມ');location='installment.php';</script>";}
else if($first==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຈ່າຍກ່ອນ');location='installment.php';</script>";}
else if($interest==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນດອກເບ້ຍ');location='installment.php';</script>";}
else if($all==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ລວມ');location='installment.php';</script>";}
else if($owe==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໜີ້ຄ້າງ');location='installment.php';</script>";}
else{
$insert=mysqli_query($conn,"insert into installment (fname,lname,gender,dob,village,district,province,tel,eid,amount,
firstget,interest,alls,owe,date,userid)values('$fname','$lname','$gender','$dob','$village','$district','$province','$tel','$eid','$amount',
'$first','$interest','$all','$owe','$date','$userid')");
if($insert){echo"ບັນທຶກສໍາເລັດ";}
else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}
?>