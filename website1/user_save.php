<?php
	$conn=mysqli_connect('localhost','root','','saleman_bie');
	$userid=$_POST['userid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$village=$_POST['village'];
	$district=$_POST['district'];
	$province=$_POST['province'];
	$tel=$_POST['tel'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$status=$_POST['status'];
	if($userid=='' and $fname=='' and $lname=='' and $gender=='' and $dob=='' and $village=='' and $district=='' and $province=='' and $tel==''
	and $username=='' and $password=='' and $status==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນໃຫ້ຄົບກ່ອນ');location='user.php';</script>";}
	else if($fname==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງຊື່');location='user.php';</script>";}
	else if($lname==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຫ້ອງນາມສະກຸນ');location='user.php';</script>";}
	else if($dob==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນວັນເດືອນປີເກີດ');location='user.php';</script>";}
	else if($village==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນບ້ານ');location='user.php';</script>";}
	else if($district==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນເມືອງ');location='user.php';</script>";}
	else if($tel==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນເບີໂທລະສັບ');location='user.php';</script>";}
	else if($username==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນຊື່ຜູ້ໃຊ້');location='user.php';</script>";}
	else if($password==''){echo"<script>alert('ກະລຸນາປ້ອນຂໍ້ມູນລະຫັດຜ່ານ');location='user.php';</script>";}
	else{
	$insert=mysqli_query($conn,"insert into user (userid,Fname,Lname,Gender,Dob,Tel,Username,Password,Status,province,district,village)
	values('$userid','$fname','$lname','$gender','$dob','$tel','$username','$password','$status','$province','$district','$village')");
	if($insert){echo"ບັນທຶກສໍາເລັດ";}
	else{echo"ບັນທຶກບໍ່ສໍາເລັດ";}}
?>