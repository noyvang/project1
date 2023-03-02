<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<div class="containner">
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
	<h1>ຈ່າຍເງິນ</h1>
	<div class="col-sm-5">
	<input type="search" id="search" class="form-control" placeholder="ກະລຸນາໃສ່ຊື່ຕ້ອງກາຄົ້ນຫາ"></div>
	<table class="table" id="bie">	
<tr>
			<th>ລຳດັບ</th>
			<th>ຊື່</th>
			<th>ນາມສະກຸນ</th>
			<th>ເພດ</th>
			<th>ວັນເດືອນປີເກີດ</th>
			<th>ເມືອງ</th>
			<th>ບ້ານ</th>
			<th>ແຂວງ</th>
			<th>ເບີໂທ</th>
			<th>ລະຫັດສິນຄ້າ</th>
			<th>ລາຄາລວມ</th>
			<th>ວັນທີຈ່າຍ</th>
			<th>ຜູ້ໃຊ້</th>
			<th>ລົບ</th>
</tr>		
		<?php
			$conn=mysqli_connect('localhost','root','','saleman_bie');
			$select=mysqli_query($conn,"select * from payment");
			while($a=mysqli_fetch_array($select)){
		?>
	<tr>
			<td><?=$a[0];?></td>
			<td><?=$a[1];?></td>
			<td><?=$a[2];?></td>
			<td><?=$a[3];?></td>
			<td><?=$a[4];?></td>
			<td><?=$a[5];?></td>
			<td><?=$a[6];?></td>
			<td><?=$a[7];?></td>
			<td><?=$a[8];?></td>
			<td><?=$a[9];?></td>
			<td><?=$a[10];?></td>
			<td><?=$a[11];?></td>
			<td><?=$a[12];?></td>
		
			
			<td><a href="payment_delete.php?id=<?=$a[0];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		<?php
		}
	?>
	</table>
	<div class="col-sm-4">
	<a href="payment.php"><button type="button" class="btn btn-success btn-block">ຍ້ອນກັບ</button></a>
	</div>
</div>