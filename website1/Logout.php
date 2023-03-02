<?php
session_start();
if(@$_SESSION['login']!=1){
	echo"<script>alert('ກະລຸນາໄປເປີດໜ້າລົງຊື່ເຂົ້າລະບົບເທົ່ານັ້ນ!');location='index.php';</script>";
}else{
?>
<?php
session_unset();
header("location:index.php");
?>	

<?php
}
?>