
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<style>*{font-family:phetsarath ot;color:white}</style>
<script src="js/jquery.js"></script>
<script>
$(function(){
	$('#login').click(function(){
		var username=$('#username').val();
		var password=$('#password').val();
		$.post('checklogin.php',
		{
			username:username,
			password:password
		},function(a){
			$('#show').html(a);
		});
	});
});
</script>
<form class="form-horizontal" role="form">
<div class="containner">
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
		<div class="panel-panel-heading"><center><h1><span class="glyphicon glyphicon-user">  </span>   Login<h1></center></div>
			
				<div class="form-group">
					<label class="control-label col-sm-4">ຊື່ຜູ້ໃຊ້ :</label>
					<div class="col-sm-8">
					<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type='text' class='form-control' placeholder='Username here....' id='username'>
					</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">ລະຫັດຜ່ານ :</label>
					<div class="col-sm-8">
					<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type='password' class='form-control' placeholder='password here....' id='password'>
					</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4"></label>
					<div class="col-sm-4">
						<button type="button" class="btn btn-success btn-block" id="login">ລອ໋ກອິນ</button>
					</div>
					<div class="col-sm-4">
						<button type="reset" class="btn btn-danger btn-block" id="reset">ຣີເຊັທ</button>
					</div>
				</div>
			<div class="col-sm-8"><div id="show"></div></div>
	</body>
</div>
</div>
</form>