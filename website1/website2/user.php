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
		$('#save').click(function(){
			var userid=$('#userid').val();
			var fname=$('#fname').val();
			var lname=$('#lname').val();
			var gender=$('#gender').val();
			var dob=$('#dob').val();
			var village=$('#village').val();
			var district=$('#district').val();
			var province=$('#province').val();
			var tel=$('#tel').val();
			var username=$('#username').val();
			var password=$('#password').val();
			var status=$('#status').val();
			$.post('user_save.php',
			{
				userid:userid,
				fname:fname,
				lname:lname,
				gender:gender,
				dob:dob,
				village:village,
				district:district,
				province:province,
				tel:tel,
				username:username,
				password:password,
				status:status
			},function(a){
				$('#show').html(a);
			});
		});
		$('#sprice').keyup(function(){
			var qty=$('#qty').val();
			var sprice=$('#sprice').val();
			var amount=qty*sprice;
			$('#amount').val(amount);
			});
	});
</script>
<form class="form-horizontal" role="form">
	<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>ຜູ້ໃຊ້</h1>
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
			<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລະຫັດຜູ້ໃຊ້:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ລະຫັດຜູ້ໃຊ້..."id="userid">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ຊື່..." id="fname">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ນາມສະກຸນ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ນາມສະກຸນ..." id="lname">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ເພດ :</label>
			<div class="col-sm-8">
				<select class="form-control" id="gender">
					<option>ເພດ</option>
					<option value="ຊາຍ">ຊາຍ</option>
					<option value="ຍິງ">ຍິງ</option>
					
				</select>
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ວັນເດືອນປີເກີດ :</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" id="dob">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ທີ່ຢູ່ :</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="village"placeholder="ບ້ານ...">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="district"placeholder="ເມືອງ...">
				</div>
				<div class="col-sm-3">
					<select class="form-control" id="province">
						<option>ແຂວງ</option>
						<option value="ຜົ້ງສາລີ">ຜົ້ງສາລີ</option>
						<option value="ບໍ່ແກ້ວ">ບໍ່ແກ້ວ</option>
						<option value="ຫຼວງນໍ້າທາ">ຫຼວງນໍ້າທາ</option>
						<option value="ຫຼວງພະບາງ">ຫຼວງພະບາງ</option>
						<option value="ໄຊຍະບູລີ">ໄຊຍະບູລີ</option>
						<option value="ຊຽງຂວາງ">ຊຽງຂວາງ</option>
						<option value="ໄຊສົມບູນ">ໄຊສົມບູນ</option>
						<option value="ບໍລິຄໍາໄຊ">ບໍລິຄຳໄຊ</option>
						<option value="ວຽງຈັນ">ວຽງຈັນ</option>
						<option value="ນະຄອນຫຼວງວຽງຈັນ">ນະຄອນຫຼວງວຽງຈັນ</option>
						<option value="ຄໍາມ່ວນ">ຄຳມ່ວນ</option>
						<option value="ສະຫວັນນະເຂດ">ສະຫວັນນະເຂດ</option>
						<option value="ຈໍາປາສັກ">ຈຳປາສັກ</option>
						<option value="ອັດຕະປື">ອັດຕະປື</option>
						<option value="ເຊກອງ">ເຊກອງ</option>
						<option value="ຫົວພັນ">ຫົວພັນ</option>
						<option value="ອຸດົມໄຊ">ອຸດົມໄຊ</option>
						<option value="ສາລະວັນ">ສາລະວັນ</option>
					</select>
				</div>
			</div>
			</div>
			<div class="col-sm-6">
			<div class="form-group">
			<label class="control-label col-sm-4">ເບີໂທລະສັບ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="tel"placeholder="ເບີໂທລະສັບ...">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ຜູ້ໃຊ້ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="username"placeholder="ຊື່ຜູ້ໃຊ້...">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລະຫັດຜ່ານ :</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" id="password">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ສະຖານະ:</label>
			<div class="col-sm-8">
				<select id="status" class="form-control">
					<option>ເລືອກ</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			</div>
		</div>
		<div class="form-group">
					<label class="control-label col-sm-3"><div id="show"></div></label>
					
					<div class="col-sm-3">
						<button type="button" id="save" class="btn btn-success btn-block">ບັນທຶກ</button>
					</div>
					<div class="col-sm-3">
						<button type="reset" class="btn btn-danger btn-block">ຣີເຊັທ</button>
					</div>
					<div class="col-sm-3">
						<a href="user_table.php"><button type="button" class="btn btn-primary btn-block">ກວດສອບ</button></a>
					</div>
				</div>
	</div>
	</div>
<form>
<?php
}
?>