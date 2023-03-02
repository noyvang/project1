
<?php
session_start();
if(@$_SESSION['login']!=1){
	echo"<script>alert('ກະລຸນາໄປເປີດໜ້າລົງຊື່ເຂົ້າລະບົບເທົ່ານັ້ນ!');location='../index.php';</script>";
}else{
?>
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<style>
	*{font-family:phetsarath ot;}
	label{color:white}
</style>
<script src="js/jquery.js"></script>

<script>
$(function(){
		$('#click').click(function(){
				var get=$('#get').val();
				var sell=$('#sell').val();
				var a=sell-get;
				$('#a').val(a);
		});
});
</script>

<form class="form-horizontal" role="form">
	<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>ຂໍ້ມູນ</h1>
		<div class="col-sm-12">
				<div class="navbar-header">
					<a class="navbar-brand"><h4>BIE Supercar-Saleman</h4> </a>
				</div>
				<ul class="nav navbar-nav">	
					<li><a href="typeproduct.php" target=""><h4>Brand ສິນຄ້າ</h4></a></li>
					<li><a href="product.php" target=""><h4>ສິນຄ້າ</h4></a></li>
					<li><a href="receives.php" target=""><h4>ສິນຄ້ານຳເຂົ້າ</h4></a></li>
					<li><a href="export.php" target=""><h4>ສິນຄ້າສົ່ງອອກ</h4></a></li>
					<li><a href="user.php" target=""><h4>ຜູ້ໃຊ້</h4></a></li>
					<li><a href="installment.php" target=""><h4>ຈ່າຍຜ່ອນ</h4></a></li>
					<li><a href="payment.php" target=""><h4>ຈ່າຍສົດ</h4></a></li>
					<li><a href="data.php" target=""><h4>ຂໍ້ມູນ</h4></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../Logout.php" ><span class="glyphicon glyphicon-log-in"></span><h4>ອອກຈາກລະບົບ</h4></a></li>
				</ul>
				
			</div>
			<div class="col-sm-6">
				<div class="form-group">
				<label class="control-label col-sm-4">ເງິນຕົ້ນທຶນ :</label>
				<div class="col-sm-6">
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select sum(amount)as sumamount from receives");
				while($a=mysqli_fetch_array($select)){
				?>
				<input type="text" id="get"class="form-control" placeholder="ເງິນຕົ້ນທຶນທີ່ເຮົາໃຊ້ໃນການຊື້..." value="<?=$a['sumamount'];?>" disabled>
				</div>
				<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
				<?php
				}
				?>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-4">ເງິນຈາກການຂາຍ :</label>
				<div class="col-sm-5">
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select sum(amount)as sumamount from export");
				while($a=mysqli_fetch_array($select)){
				?>
				<input type="text" id="sell"class="form-control" placeholder="ເງິນຕົ້ນທຶນທີ່ເຮົາໄດ້ຈາກການຂາຍ..." value="<?=$a['sumamount'];?>" disabled>
				<?php
				}
				?>
			</div>
			<div class="col-sm-3"><button type="button" class="btn btn-success btn-block "id="click">ຄິດໄລ່ກຳໄລ</button></div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-4">ເງິນກຳໄລ :</label>
				<div class="col-sm-6">
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select sum(amount)as sumamount from export");
				while($a=mysqli_fetch_array($select)){
				?>
				<input type="text" class="form-control" placeholder="ເງິນກໍາໄລ..." id="a" disabled></div>
				<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
				<?php
				}
				?>
				</div>
				</div>
				<div class="col-sm-6">
				<div class="form-group">
				<label class="control-label col-sm-4">ຈຳນວນສິນຄ້າທີ່ມີຕອນນີ້ :</label>
				<div class="col-sm-8">
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select sum(qty)as sumqty from product");
				while($c=mysqli_fetch_array($select)){
				?>
				<input type="text" class="form-control" placeholder="ຈໍານວນ..." id="qty"value="<?=$c['sumqty'];?>" disabled></div>
				<?php
				}
				?>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-4">ຈຳນວນສິນຄ້າທີ່ຮັບ :</label>
				<div class="col-sm-8">
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select sum(qty)as sumqty from receives");
				while($z=mysqli_fetch_array($select)){
				?>
				<input type="text" class="form-control" placeholder="ຈໍານວນ..." id="qty"value="<?=$z['sumqty'];?>" disabled></div>
				<?php
				}
				?>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-4">ຈຳນວນສິນຄ້າໄດ້ຂາຍ :</label>
				<div class="col-sm-8">
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select sum(qty)as sumqty from export");
				while($q=mysqli_fetch_array($select)){
				?>
				<input type="text" class="form-control" placeholder="ຈໍານວນ..." id="qty"value="<?=$q['sumqty'];?>" disabled></div>
				<?php
				}
				?>
				</div>
			</div>
			</div>
			
	</div>
	</div>
<form><?php
}
?>