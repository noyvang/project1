<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<form class="form-horizontal" role="form" >
<div class="container">
<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$id=$_GET['id'];
		$select=mysqli_query($conn,"select*from receives where rid='$id'");
		while($a=mysqli_fetch_array($select)){
	?>
<style>
	*{font-family:phetsarath ot;}
	label{color:white}
</style>
<script src="js/jquery.js"></script>
<script>
	$(function(){
		$('#save').click(function(){
			var idd=$('#id1').val();
			var id=$('#id').val();
			var qty=$('#qty').val();
			var bprice=$('#bprice').val();
			var amount=$('#amount').val();
			var date=$('#date').val();
			$.post('receivesupdate.php',
			{	
				idd:idd,
				id:id,
				qty:qty,
				bprice:bprice,
				amount:amount,
				date:date
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
	});
</script>
<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
<h1>ແກ້ໄຂຂໍ້ມູນສິນຄ້າ</h1>
<div class="col-sm-6">
<div class="form-group">
			<label class="control-label col-sm-4">ລຳດັບສິນຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="id1"name="qty" placeholder="ລໍາດັບສິນຄ້າ"  value="<?=$a[0];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ສິນຄ້າ :</label>
			<div class="col-sm-8">
				<select name="id"class="form-control" id="id" value="<?=$a[1];?>">
					<option>ເລືອກ</option>
						<?php
							$conns=mysqli_connect("localhost","root","","saleman_bie");
							$selects=mysqli_query($conns,"select*from product");
							while($s=mysqli_fetch_array($selects)){
						?>
					<option value="<?=$s[0];?>"><?=$s[2];?></option>
					<?php
							}
					?>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-4">ຈຳນວນສິນຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="qty"name="qty" placeholder="ຈໍານວນສິນຄ້າ..." value="<?=$a[2];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລາຄາຊື້:</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="bprice"name="bprice" placeholder="ລາຄາຊື້..." value="<?=$a[3];?>">
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
				<input type="text" class="form-control" name="amount"id="amount"placeholder="ລວມເປັນເງິນ..." value="<?=$a[4];?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ວັນເດືອນປີ :</label>
			<div class="col-sm-8">
				<input type="date" class="form-control" name="date" id="date" value="<?=$a[5];?>" disabled>
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
						<a href="receives_table.php"><button type="button" class="btn btn-primary btn-block">ຍ້ອນກັບ</button></a>
					</div>
					
				</div>
				</div>
				</div>
				<?php
		}
				?>
				</form>