<?php
session_start();
if(@$_SESSION['login']!=1){
	echo"<script>alert('ກະລຸນາໄປເປີດໜ້າລົງຊື່ເຂົ້າລະບົບເທົ່ານັ້ນ!');location='../index.php';</script>";
}else{
?>
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<form class="form-horizontal" role="form">
<style>
*{font-family:phetsarath OT;}
label{color:white}
</style>
<script src="js/jquery.js"></script>
<script>
	$(function(){
		$('#save').click(function(){
			var typeid=$('#typeid').val();
			var typename=$('#typename').val();
			$.post('typesave.php',
			{
				typeid:typeid,
				typename:typename
				},function(a){
				$('#show').html(a);
			});
		});
			});
	</script>
	<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>Brand ສິນຄ້າ</h1>
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
					<li><a href="../Logout.php" ><span class="glyphicon glyphicon-log-in"></span><h4>ອອກຈາກລະບົບ</h4></a></li>	</ul>
				
			</div>
			<div class="col-sm-3"></div>
			
			<div class="col-sm-6">
				<div class="form-group">
				
					<label class="control-label col-sm-4">ລະຫັດ Brand ສິນຄ້າ : </label>
					<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="ລະຫັດ Brand ສິນຄ້າ" id="typeid" name="typeid">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">ຊື່ Brand ສິນຄ້າ : </label>
					<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="ຊື່ brand ສິນຄ້າ" id="typename" name="typename">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3"><div id='show'></div></label>
					<div class="col-sm-3">
						<button type="button" class="btn btn-success btn-block" id="save">ບັນທຶກ</button>
					</div>
					<div class="col-sm-3">
						<button type="reset" class="btn btn-danger btn-block">ຣີເຊັທ</button>
					</div>
					<div class="col-sm-3">
						<a href="typeproduct_table.php" target=""><button type="button" class="btn btn-primary btn-block">ກວດສອບ</button></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php
}
?>