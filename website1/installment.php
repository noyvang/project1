
<?php
session_start();
if(@$_SESSION['login']!=1){
	echo"<script>alert('ກະລຸນາໄປເປີດໜ້າລົງຊື່ເຂົ້າລະບົບເທົ່ານັ້ນ!');location='index.php';</script>";
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
			var id=$('#id').val();
			var fname=$('#fname').val();
			var lname=$('#lname').val();
			var gender=$('#gender').val();
			var dob=$('#dob').val();
			var village=$('#village').val();
			var district=$('#district').val();
			var province=$('#province').val();
			var tel=$('#tel').val();
			var eid=$('#eid').val();
			var amount=$('#amount').val();
			
			var first=$('#firstpay').val();
			var interest=$('#interest').val();
			var alls=$('#all').val();
			var owe=$('#owe').val();
			
			$.post('installment_save.php',
			{
				id:id,
				fname:fname,
				lname:lname,
				gender:gender,
				dob:dob,
				village:village,
				district:district,
				province:province,
				tel:tel,
				eid:eid,
				amount:amount,
				
				first:first,
				interest:interest,
				alls:alls,
				owe:owe
				
		},function(a){
			$('#show').html(a);
		});
		});
	
	});
</script>
<script>
$(function(){
		$('#eid').click(function(){
			var id=$('#eid').val();
			$.post('intallment_select.php',
			{
				id:id
			},function(a){
				$('#amount').val(a);
			});
		});
		$('#first').click(function(){
			var first=$('#first').val();
			var amount=$('#amount').val();
			var b=first*amount;
			
			
				$('#interest').val(b);
				
			var interest=$('#interest').val();
				
				var s=parseInt(amount)+parseInt(interest);
				$('#all').val(s)
			var all=$('#all').val();
			var k=all-interest;
			$('#owe').val(k);
			});
			$('#first').click(function(){
				var first=$('#first').val();
				var interest=$('#all').val();
				$.post('kak.php',
				{
					first:first,
					interest:interest
				},function(kkk){
					$('#firstpay').val(kkk);
				});
			});
		});

</script>

<form class="form-horizontal" role="form">
	<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>ຈ່າຍຜ່ອນ</h1>
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
					<li><a href="Logout.php" ><span class="glyphicon glyphicon-log-in"></span><h4>ອອກຈາກລະບົບ</h4></a></li>
				</ul>
				
			</div>
			<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລຳດັບລູກຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ລໍາດັບລູກຄ້າ..." id="id">
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
					<input type="date" id="dob" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ທີ່ຢູ່ :</label>
				<div class="col-sm-2">
					<input type="text" id="village"class="form-control" placeholder="ບ້ານ...">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="district"placeholder="ເມືອງ...">
				</div>
				<div class="col-sm-4">
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
			<div class="form-group">
			<label class="control-label col-sm-4">ເບີໂທລະສັບ :</label>
			<div class="col-sm-8">
				<input type="text" id="tel"class="form-control" placeholder="ເບີໂທລະສັບ...">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລຳດັບສິນຄ້າຂາຍ :</label>
			<div class="col-sm-8">
				<select class="form-control" id="eid">
					<option>ເລືອກ</option>
						<?php
						$conn=mysqli_connect('localhost','root','','saleman_bie');
						$sel=mysqli_query($conn,"select * from export");
						while($a=mysqli_fetch_array($sel)){
						?>
					<option value="<?=$a[0];?>"><?=$a[0];?></option>
					<?php
						}
					?>
				</select>
			</div>
		</div>
			</div>
			
			<div class="col-sm-6">
			
		<div class="form-group">
			<label class="control-label col-sm-4">ເປັນເງິນທັງໝົດ :</label>
			<div class="col-sm-6">
				<input type="text" id="amount"class="form-control" placeholder="ເປັນເງິນທັງໝົດ">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">ຈ່າຍກ່ອນ % :</label>
			<div class="col-sm-6">
				<select class="form-control" id="first" placeholder="ຈ່າຍກ່ອນ...">
					<option>ເລືອກ</option>
					<option value=0.2>5%</option>
					<option value=0.05>10%</option>
					<option value=0.01>20%</option>
				</select>
			</div><div class="col-sm-2">
				<input type="text" class="form-control" value=" %" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ດອກເບ້ຍ :</label>
			<div class="col-sm-6">
			
				<input type="text" class="form-control" id="interest" placeholder="ດອກເບ້ຍຕໍ່ເດຶອນ">
					
			</div>
			
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
			
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຈ່າຍກ່ອນ :</label>
			<div class="col-sm-6">
			
				<input type="text" class="form-control" id="firstpay" placeholder="ຈ່າຍກ່ອນ">
					
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລວມ:</label>
			<div class="col-sm-6">
			
				<input type="text" class="form-control" id="all" placeholder="ລວມ">
					
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຍັງຄ້າງ :</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="owe"placeholder="ຍັງຄ້າງ...">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		
		
		<div class="form-group">
					<label class="control-label col-sm-3"><div id="show"></div></label>
					
					<div class="col-sm-3">
						<button type="button" class="btn btn-success btn-block" id="save">ບັນທຶກ</button>
					</div>
					<div class="col-sm-3">
						<button type="reset" class="btn btn-danger btn-block">ຣີເຊັທ</button>
					</div>
					<div class="col-sm-3">
					<a href="installment_table.php">	<button type="button" class="btn btn-primary btn-block">ກວດສອບ</button></a>
					</div>
				</div>
	</div>
	</div>
<form><?php
}
?>