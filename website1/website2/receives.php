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
			var id=$('#id').val();
			var qty=$('#qty').val();
			var bprice=$('#bprice').val();
			var amount=$('#amount').val();
			$.post('receives_save.php',
			{
				id:id,
				qty:qty,
				bprice:bprice,
				amount:amount
			},function(a){
				$('#show').html(a);
			});
		});
		$('#bprice').keyup(function(){
			var qty=$('#qty').val();
			var bprice=$('#bprice').val();
			var amount=qty*bprice;
			$('#amount').val(amount);
			});
			$('#typeid').change(function(){
				var typeid=$('#typeid').val();
				$.post('select_product.php',
				{
					typeid:typeid
				},function(zy){
					$('#id').html(zy);
				});
			});
			$('#id').click(function(){
				var id=$('#id').val();
				$.post('select_qty.php',
				{
					id:id
				},function(zzz){	
					$('#oldqty').val(zzz);
				});
			});
	});
</script>
<form class="form-horizontal" role="form" >
	<div class="container">
		<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<h1>ສິນຄ້ານຳເຂົ້າ</h1>
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
			<label class="control-label col-sm-4">Brand ສິນຄ້າ :</label>
			<div class="col-sm-8">
				<select name="id"class="form-control" id="typeid">
					<option>ເລືອກ</option>
						<?php
							$conn=mysqli_connect("localhost","root","","saleman_bie");
							$select=mysqli_query($conn,"select*from typeproduct");
							while($a=mysqli_fetch_array($select)){
						?>
					<option value="<?=$a[0];?>"><?=$a[1];?></option>
					<?php
							}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ສິນຄ້າ :</label>
			<div class="col-sm-8">
				<select name="id"class="form-control" id="id">
				<option>ເລືອກ</option>
				<?php
				$conn=mysqli_connect('localhost','root','','saleman_bie');
				$select=mysqli_query($conn,"select*from product");
				while($x=mysqli_fetch_array($select)){
				?>
				<option value="<?=$x[0]?>"><?=$x[2];?></option>
				<?php
				}
				?>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">ຈຳນວນສິນຄ້າ :</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="qty"name="qty" placeholder="ຈໍານວນສິນຄ້າ...">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="oldqty"name="qty" placeholder="ຈໍານວນທີ່ມີ..." disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລາຄາຊື້:</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="bprice"name="bprice" placeholder="ລາຄາຊື້...">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		</div>
		<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລວມເປັນເງິນ :</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="amount"id="amount"placeholder="ລວມເປັນເງິນ..." disabled>
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
						<a href="receives_table.php"><button type="button" class="btn btn-primary btn-block">ກວດສອບ</button></a>
					</div>
					
				</div>
				</div>
	</div>
<form>
<?php
}
?>