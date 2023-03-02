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
	<h1>ຜູ້ໃຊ້</h1>
	<div class="col-sm-5">
	<input type="search" id="search" class="form-control" placeholder="ກະລຸນາໃສ່ຊື່ຕ້ອງກາຄົ້ນຫາ"></div>
	<table class="table" id="bie">
	
		<tr>
			<th>ລະຫັດຜູ້ໃຊ້</th>
			<th>ຊື່</th>
			<th>ນາມສະກຸນ</th>
			<th>ເພດ</th>
			<th>ວັນເດືອນປີເກີດ</th>
			<th>ເບີໂທ</th>
			<th>ຊື່ຜູ້ໃຊ້</th>
			<th>ລະຫັດຜ່ານ</th>
			<th>ສະຖານະ</th>
			<th>ແຂວງ</th>
			<th>ເມືອງ</th>
			<th>ບ້ານ</th>
			<th>ແກ້ໄຂ</th>
			<th>ລົບ</th>
		</tr>
		<?php
		$conn=mysqli_connect('localhost','root','','saleman_bie');
		$select=mysqli_query($conn,"select * from user");
		while($a=mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?=$a['userid'];?></td>
			<td><?=$a['Fname'];?></td>
			<td><?=$a['Lname'];?></td>
			<td><?=$a['Gender'];?></td>
			<td><?=$a['Dob'];?></td>
			<td><?=$a['Tel'];?></td>
			<td><?=$a['Username'];?></td>
			<td><?=$a['Password'];?></td>
			<td><?=$a['status'];?></td>
			<td><?=$a['province'];?></td>
			<td><?=$a['district'];?></td>
			<td><?=$a['village'];?></td>
			<td><a href="user_update.php?id=<?=$a[0];?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="user_delete.php?id=<?=$a[0];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		<?php
		}
	?>
	</table>
	<div class="col-sm-4">
	<a href="user.php"><button type="button" class="btn btn-success btn-block">ຍ້ອນກັບ</button></a>
	</div>
</div>