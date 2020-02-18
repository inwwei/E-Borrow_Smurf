<?php include "header.php" ?>
<?php
$action = new Action();
$rows = $action->get_item();
?>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    
<div class="container">
        <br>
        &nbsp;
			<form class="form-inline"name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
				<div class="form-group mb-2">	
					<h2>รายการอุปกรณ์</h2>
				</div>
				
				<div class="form-group mx-sm-3 mb-2">
					<input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
					</div>
				
				<button type="submit" class="btn btn-primary mb-2" >Search</button>
			
			</form>
            <hr>
			<table  class="table table-bordered container">
				<tr>
				<th scope="col">รหัสอุปกรณ์</th>
                    <th scope="col">รายละเอียด</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">รูป</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">สถานะ</th>
				</tr>
				<?php while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
  				<tr>
 					<th scope="row"><?=$row['Id']?></th>
                    <td> <?=$row['Name']?></td>
                    <td> <?=$row['TypeId']?></td>
                    <td><img src="image/<?=$row['img'];?>" width="100" height="100"></td>
                    <td><?=$row['Price']?></td>
                    <td><?=$row['Status']?></td>
				</tr>
				<?php
				}
				?>
			</table>
<?php
mysqli_close($conn);
?>
</div>
<?php include "footer.php"?>
<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>