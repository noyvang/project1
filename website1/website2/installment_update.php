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
			var still=$('#still').val();
			$.post('install_update.php',
			{
				
				id:id,
				still:still
			},function(a){
				
				$('#show').html(a);
			});
		});
		$('#pay').keyup(function(){
			var owe=$('#owe').val();
			var still=$('#still').val();
			var pay=$('#pay').val();
			var x=owe-pay;
			$('#still').val(x);
		});
	});
</script>
<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>ແກ້ໄຂຊຳລະເງິນ </h1>
		<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$id=$_GET['id'];
		$select=mysqli_query($conn,"select * from installment where dow_id='$id' ");
		while($s=mysqli_fetch_array($select)){
		?>
<form class="form-horizontal" role="form">
<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລຳດັບລູກຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ລໍາດັບລູກຄ້າ..." id="id" value="<?=$s[0];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ຊື່..." id="fname" value="<?=$s['fname'];?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ນາມສະກຸນ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ນາມສະກຸນ..." id="lname" value="<?=$s['lname'];?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ເພດ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="gender" value="<?=$s['gender'];?>" disabled>
				
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ວັນເດືອນປີເກີດ :</label>
				<div class="col-sm-8">
					<input type="date" id="dob" class="form-control" value="<?=$s['dob'];?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">ທີ່ຢູ່ :</label>
				<div class="col-sm-2">
					<input type="text" id="village"class="form-control" placeholder="ບ້ານ..."  value="<?=$s['village'];?>"disabled>
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="district"placeholder="ເມືອງ..."  value="<?=$s['district'];?>"disabled>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="province"  value="<?=$s['province'];?>"disabled>
						
				</div>
			</div>
			<div class="form-group">
			<label class="control-label col-sm-4">ເບີໂທລະສັບ :</label>
			<div class="col-sm-8">
				<input type="text" id="tel"class="form-control" placeholder="ເບີໂທລະສັບ..." value="<?=$s['tel'];?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລຳດັບສິນຄ້າຂາຍ :</label>
			<div class="col-sm-8">
				<input type="text"class="form-control" id="eid"  value="<?=$s['eid'];?>" disabled>
				
			</div>
		</div>
			</div>
			
			<div class="col-sm-6">
			
		<div class="form-group">
			<label class="control-label col-sm-4">ເປັນເງິນທັງໝົດ :</label>
			<div class="col-sm-8">
				<input type="text" id="amount"class="form-control" placeholder="ເປັນເງິນທັງໝົດ"  value="<?=$s['amount'];?>" disabled>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">ຈ່າຍກ່ອນ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="first" placeholder="ຈ່າຍກ່ອນ..." value="<?=$s['firstget'];?>" disabled>
					
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ດອກເບ້ຍ :</label>
			<div class="col-sm-8">
			
				<input type="text" class="form-control" id="interest" value="<?=$s['interest'];?>" placeholder="ດອກເບ້ຍຕໍ່ເດຶອນ" disabled>
					
			</div>
			
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລວມ:</label>
			<div class="col-sm-8">
			
				<input type="text" class="form-control" id="all" placeholder="ລວມ"  value="<?=$s['alls'];?>" disabled>
					
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຈ່າຍ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="pay"placeholder="ຈ່າຍ..." >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຍັງຄ້າງ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="owe"placeholder="ຍັງຄ້າງ..." value="<?=$s['owe'];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ທີ່ເຫຼືອ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="still"placeholder="ທີເຫຼືອ...">
			</div>
		</div>
		
		<div class="form-group">
					<label class="control-label col-sm-3"><div id="show"></div></label>
					
					<div class="col-sm-3">
						<button type="button" class="btn btn-success btn-block" id="save">ແກ້ໄຂ</button>
					</div>
					<div class="col-sm-3">
						<button type="reset" class="btn btn-danger btn-block">ຣີເຊັທ</button>
					</div>
					<div class="col-sm-3">
					<a href="installment_table.php">	<button type="button" class="btn btn-primary btn-block">ກວດສອບ</button></a>
					</div>
				</div>
				</form>
				<?php
		}
				?>