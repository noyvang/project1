<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<style>
	*{font-family:phetsarath ot;}
	label{color:white}
</style>
<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$id=$_GET['id'];
		$select=mysqli_query($conn,"select*from export where eid='$id'");
		while($a=mysqli_fetch_array($select)){
	?>
<script src="js/jquery.js"></script>
<script>
	$(function(){
		$('#save').click(function(){
			var idd=$('#idd').val();
			var id=$('#id').val();
			var qty=$('#qty').val();
			var sprice=$('#sprice').val();
			var amount=$('#amount').val();
			var date=$('#date').val();
			$.post('exportupdate.php',
			{
				idd:idd,
				id:id,
				qty:qty,
				sprice:sprice,
				amount:amount,
				date:date
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
		<h1>ແກ້ໄຂສິນຄ້າສົ່ງອອກ</h1>
		
		<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລຳດັບສິນຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="ຈໍານວນສິນຄ້າ..." id="idd" value="<?=$a[0];?>">
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
				<input type="text" class="form-control" placeholder="ຈໍານວນສິນຄ້າ..." id="qty"value="<?=$a[2];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລາຄາຂາຍ :</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="ລາຄາຂາຍ..." id="sprice" value="<?=$a[3];?>">
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
				<input type="text" class="form-control" placeholder="ລວມເປັນເງິນ..." id="amount"value="<?=$a[4];?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" value=" $" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ວັນເດືອນປີ :</label>
			<div class="col-sm-8">
				<input type="date" class="form-control" id="date"value="<?=$a[5];?>" disabled>
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
						<a href="export_table.php"><button type="button" class="btn btn-primary btn-block">ກວດສອບ</button></a>
					</div>
				</div>
	</div>
	</div>
	</form>
	<?php
		}
	?>