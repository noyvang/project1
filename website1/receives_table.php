<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<div class="container">
<style>
	*{font-family:phetsarath ot;}
	*{color:white}
</style>
<script src="js/jquery.js"></script>
<script>
    $(function(){
        $('#search').keyup(function(){
            searchs($(this).val());
        });
        function searchs(value){
            $('#bie tr').each(function(){
                var aa='false';
                $(this).each(function(){
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0){
                        aa='true';
                    }
                });
                    if(aa=='true'){
                        $(this).show();

                    }else{
                        $(this).hide();
                    }
            });
        }
});
</script>
<body background="../photo/https---api.thedrive.com-wp-content-uploads-2018-12-Aperta.jpg">
	<h1>ຂໍ້ມູນສິນຄ້ານໍາເຂົ້າ</h1>
	<div class="col-sm-5">
	<input type="search" id="search" class="form-control" placeholder="ກະລຸນາໃສ່ຊື່ຕ້ອງກາຄົ້ນຫາ"></div>
	<table class="table" id="bie">
	
		<tr>
			<th>ລຳດັບ </th>
			<th>ລະຫັດສິນຄ້າ</th>
			<th>ຈຳນວນ</th>
			<th>ລາຄາຊື້</th>
			<th>ລວມ</th>
			<th>ວັນທີ</th>
			<th>ຜູ້ໃຊ້</th>
			<th>ແກ້ໄຂ</th>
			<th>ລົບ</th>
		</tr>
		<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$select=mysqli_query($conn,"select * from receives as r,user as u where r.userid=u.userid");
		while($a=mysqli_fetch_array($select)){
	?>
		<tr>
			<td><?=$a[0];?></td>
			<td><?=$a[1];?></td>
			<td><?=$a[2];?></td>
			<td><?=$a[3];?></td>
			<td><?=$a[4];?></td>
			<td><?=$a[5];?></td>
			<td><?=$a['Fname'];?></td>
			<td><a href="receives_update.php?id=<?=$a[0];?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="receives_delete.php?id=<?=$a[0];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		<?php
		}
	?>
	</table>
	<div class="col-sm-4">
	<a href="receives.php"><button type="button" class="btn btn-success btn-block">ຍ້ອນກັບ</button></a>
	</div>
</div>