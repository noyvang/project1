<?php session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','','saleman_bie');
$select=mysqli_query($conn,"select * from user where Username='$username' and Password='$password'");
$check=mysqli_num_rows($select);
if($check==1){
	$a=mysqli_fetch_array($select);
	if($a['status']=='admin'){
		$_SESSION['userid']=$a['userid'];
		$_SESSION['Fname']=$a['Fname'];
		$_SESSION['Lname']=$a['Lname'];
		$_SESSION['login']=1;
		echo"<script>location='typeproduct.php';</script>";
	}else if($a['status']=='user'){
		$_SESSION['userid']=$a['userid'];
		$_SESSION['Fname']=$a['Fname'];
		$_SESSION['Lname']=$a['Lname'];
		$_SESSION['login']=1;
		echo"<script>location='website2/typeproduct.php';</script>";
	}
	else{echo"ບໍ່ມີຜູ້ໃຊ້ນີ້";}
}else{echo"ລະຫັດຜູ້ນໍາໃຊ້ບໍ່ຖືກຕ້ອງ";}
	

?>