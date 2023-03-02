
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
<style>
*{font-family:phetsarath ot}
</style>
<script src="js/jquery.js"></script>
<script>
	$(function(){
		$('#click').click(function(){
			var id=$('#id').val();
			$.post('billooo.php',
			{
				id:id
			},function(){
				$('#show').val();
			});
		});
	});
</script>
<button type="button" onclick="window.print()" class="btn btn-info hidden-print" id="click">print</button>
<div class="containner">
						
						<div class="col-sm-12">
						<h5><center>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ<br>ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ<br>
						-------------000------------
						</h5>
						<div class="col-sm-3">
						<h5>Saleman BIE</h5>
						</div>
						<div class="col-sm-9">
						</div>
						<div class="col-sm-12">
						<h4><center>ໃບບິນ</h4>
						</div>
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
						<table class="table">
							<tr>
								<th>ລຳດັບ</th>
								<th>ຊື່</th>
								<th>ນາມສະກຸນ</th>
								<th>ລະຫັດສິນຄ້າ</th>
								<th>ລວມລາຄາ</th>
							</tr>
							<?php
							$conn=mysqli_connect('localhost','root','','saleman_bie');
							$s=mysqli_query($conn,"select * from payment where remark!='payed'");
							while($a=mysqli_fetch_array($s)){
							?>
							<tr>
								<td><input type="text" id='id' value='<?=$a['pay_id'];?>'></td>
								<td><?=$a['fname'];?></td>
								<td><?=$a['lname'];?></td>
								<td><?=$a['eid'];?></td>
								<td><?=$a['amount'];?></td>
							</tr>
							<?php
							}
							?>
						</table>
						</div>
						<div class="col-sm-3">
						</div>
						<div class="col-sm-3">
						<?php
							$conn=mysqli_connect('localhost','root','','saleman_bie');
							$s=mysqli_query($conn,"select * from payment as p,user as u where u.userid=p.userid and p.remark!='payed'");
							while($a=mysqli_fetch_array($s)){
							?>
						<h5>ຜູ້ຮັບເງິນ :<?=$a['Username'];?></h5>
						<?php
							}
						?>
						</div>
						<div class="col-sm-6"></div>
						<div class="col-sm-3">
						<?php
							$conn=mysqli_connect('localhost','root','','saleman_bie');
							$s=mysqli_query($conn,"select * from payment as p,user as u where u.userid=p.userid and p.remark!='payed'");
							while($a=mysqli_fetch_array($s)){
							?>
						<h5>ຜູ້ຈ່າຍ :</h5>
						<?php
							}
						?>
						</div>
						<div class="show"></div>
						</div>
</div>