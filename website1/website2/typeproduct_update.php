<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">

<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$id=$_GET['id'];
		$select=mysqli_query($conn,"select*from typeproduct where type_id='$id'");
		while($a=mysqli_fetch_array($select)){
	?>
<script src="js/jquery.js"></script>
<script>
	$(function(){
		$('#save').click(function(){
			var typeid=$('#typeid').val();
			var typename=$('#typename').val();
			$.post('typeupdate.php',
			{
				typeid:typeid,
				typename:typename
				},function(a){
				$('#show').html(a);
			});
		});
			});
	</script>
<form class="form-horizontal" role="form">
<style>
*{font-family:phetsarath OT;}
label{color:white}
</style>
<div class="container">
<h1>ແກ້ໄຂຂໍ້ມູນ Brand ສິນຄ້າ</h1>
<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
<div class="form-group">
					<label class="control-label col-sm-4">ລະຫັດ Brand ສິນຄ້າ : </label>
					<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="ລະຫັດ Brand ສິນຄ້າ" id="typeid" name="typeid" value="<?=$a[0];?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">ຊື່ Brand ສິນຄ້າ : </label>
					<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="ຊື່ brand ສິນຄ້າ" id="typename" name="typename"value="<?=$a[1];?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4"><div id='show'></div></label>
					<div class="col-sm-2">
						<button type="button" class="btn btn-success btn-block" id="save">ແກ້ໄຂ</button>
					</div>
					<div class="col-sm-2">
						<button type="reset" class="btn btn-danger btn-block">ຣີເຊັທ</button>
					</div>
					<div class="col-sm-2">
						<a href="typeproduct_table.php" target=""><button type="button" class="btn btn-primary btn-block">ຍ້ອນກັບ</button></a>
					</div>
				</div>
				</div>
				<form>
				<?php
		}
				?>