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
	$insert=mysqli_query($conn,"update user set Fname='$fname',Lname='$lname',Gender='$gender',Dob='$dob',village='$village',
	district='$district',province='$province',Tel='$tel',Username='$username',Password='$password',Status='$status' where userid='$userid' ");
	if($insert){echo"ແກ້ໄຂສໍາເລັດ";}
	else{echo"ແກ້ໄຂບໍ່ສໍາເລັດ";}
?>