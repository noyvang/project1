<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">

<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$id=$_GET['id'];
		$select=mysqli_query($conn,"select*from product where id='$id'");
		while($a=mysqli_fetch_array($select)){
	?>

<form class="form-horizontal" role="form" >
<style>
	*{font-family:phetsarath ot;}
	label{color:white}
</style>
<script src="js/jquery.js"></script>
<script>
	$(function(){
		$('#save').click(function(){
		var id=$('#id').val();
		var type=$('#type').val();
		var name=$('#name').val();
		var detail=$('#detail').val();
		var qty=$('#qty').val();
		var bprice=$('#bprice').val();
		var sprice=$('#sprice').val();
		$.post('productupdate.php',
		{
			id:id,
			type:type,
			name:name,
			detail:detail,
			qty:qty,
			bprice:bprice,
			sprice:sprice
		},function(a){
			$('#show').html(a);
		});
	});
	});
</script>
<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
<div class="container">
<h1>ແກ້ໄຂຂໍ້ມູນ ສິນຄ້າ</h1>
<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ລະຫັດສິນຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="id"name="id" placeholder="ລະຫັດສິນຄ້າ..." value="<?=$a[0];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">Bland ສິິນຄ້າ:</label>
			<div class="col-sm-8">
				<select class="form-control" id="type"name="type" value="<?=$a[1];?>">
					
						<option>ເລືອກ</option>
						<?php
							$conns=mysqli_connect('localhost','root','','saleman_bie');
							$selects=mysqli_query($conns,"select * from typeproduct");
							while($s=mysqli_fetch_array($selects)){
						?>
						<option value="<?=$s[0];?>"><?=$s[1];?></option>
						<?php
							}
						?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ຊື່ສິນຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="name"name="name" placeholder="ຊື່ສິນຄ້າ..." value="<?=$a[2];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລາຍລະອຽດ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="detail"name="detail" placeholder="ລາຍລະອຽດ..." value="<?=$a[3];?>">
			</div>
		</div>
		</div>
		<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label col-sm-4">ຈຳນວນສິນຄ້າ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="qty" name="qty" placeholder="ຈໍານວນສິນຄ້າ..." value="<?=$a[4];?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລາຄາຊື້ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="bprice" name="bprice" placeholder="ລາຄາຊື້..." value="<?=$a[5];?>" DISABLED>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4">ລາຄາຂາຍ :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="sprice"name="sprice" placeholder="ລາຄາຂາຍ..." value="<?=$a[6];?>" disabled>
			</div>
		</div>
		<div class="form-group">
					<label class="control-label col-sm-3"><div id="show"></div></label>
					
					<div class="col-sm-3">
						<button type="button" class="btn btn-success btn-block" id="save" name="save">ແກ້ໄຂ</button>
					</div>
					<div class="col-sm-3">
						<button type="reset" class="btn btn-danger btn-block">ຣີເຊັທ</button>
					</div>
					<div class="col-sm-3">
						<a href="product_table.php"><button type="button" class="btn btn-primary btn-block">ຍ້ອນກັບ</button></a>
					</div>
				</div>
	</div>
	</div>
	
	</form>
	<?php
		}
	?>