<?php include "header.php" ?>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>


<?php
   $serverName = "10.199.66.227";
   $userName = "20S2_g4";
   $userPassword = "Dwg7Q6UQ";
   $dbName = "20S2_g4";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM item WHERE Name LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
		<div class="container">
		<br>
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