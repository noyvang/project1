<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<style>
	*{font-family:phetsarath ot;}
	label{color:white}
</style>
<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$id=$_GET['id'];
		$select=mysqli_query($conn,"select*from user where userid='$id'");
		while($a=mysqli_fetch_array($select)){
	?>
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
			$.post('userupdate.php',
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
		
	});
</script>
<form class="form-horizontal" role="form">
	<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>ຜູ້ໃຊ້</h1>

<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລະຫັດຜູ້ໃຊ້:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ລະຫັດຜູ້ໃຊ້..."id="userid" value="<?=$a[0];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ຊື່..." id="fname"  value="<?=$a[1];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ນາມສະກຸນ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ນາມສະກຸນ..." id="lname"  value="<?=$a[2];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ເພດ :</label>
			<div class="col-sm-8">
				<select class="form-control" id="gender"  value="<?=$a[3];?>">
					<option>ເພດ</option>
					<option value="ຊາຍ">ຊາຍ</option>
					<option value="ຍິງ">ຍິງ</option>
					
				</select>
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ວັນເດືອນປີເກີດ :</label>
				<div class="col-sm-8">
					<input type="date" class="form-control" id="dob"  value="<?=$a[4];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ທີ່ຢູ່ :</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="village"placeholder="ບ້ານ..." value="<?=$a['village'];?>">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="district"placeholder="ເມືອງ..." value="<?=$a['district'];?>">
				</div>
				<div class="col-sm-3">
					<select class="form-control" id="province"  value="<?=$a['province'];?>">
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
				<input type="text" class="form-control" id="tel"placeholder="ເບີໂທລະສັບ..." value="<?=$a['Tel'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ຜູ້ໃຊ້ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="username"placeholder="ຊື່ຜູ້ໃຊ້..." value="<?=$a['Username'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລະຫັດຜ່ານ :</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" id="password"placeholder="ລະຫັດຜ່ານ" value="<?=$a['Password'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ສະຖານະ:</label>
			<div class="col-sm-8">
				<select id="status" class="form-control" value="<?=$a['Status'];?>">
					<option>ເລືອກ</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			</div>
		</div>
		<div class="form-group">
					<label class="control-label col-sm-3"><div id="show"></div></label>
					
					<div class="col-sm-3">
						<button type="button" id="save" class="btn btn-success btn-block">ແກ້ໄຂ</button>
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
	</form>
	<?php
		}
	?>