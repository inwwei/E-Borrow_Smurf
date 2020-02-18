<!--------------------Header---------------------------->
<?php include "header.php" ?>
<div class="container">
<br>
<div class="form-group mb-2">	
	<h2>รายการอุปกรณ์</h2>
</div>
<br>
<!--------------------Header---------------------------->

<!----ส่วนที่ใช้ดึงข้อมูล---->
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
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$secKeyword = null;

	if(isset($_POST["sechKeyword"]))
	{
		$secKeyword = $_POST["sechKeyword"];
	}
?>
<?php
   $serverName = "10.199.66.227";
   $userName = "20S2_g4";
   $userPassword = "Dwg7Q6UQ";
   $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$sql = "SELECT * FROM item WHERE Name LIKE '%".$secKeyword."%'AND Status LIKE '%".$strKeyword."%'"  ;
	$query = mysqli_query($conn,$sql);
?>

<!--ส่วนบอกสถา นะว่าง-ไม่ว่าง-->	<!--ส่วนค้นหารายการ-->
	<form class="form-inline"name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
	<input class="form-control" name="sechKeyword" type="text" id="sechKeyword" placeholder="กรอกชื่ออุปกรณ์ที่จะค้นหา" value="">&nbsp;&nbsp;
	<h6>ตัวกรอง :</h6>&nbsp;&nbsp;
	<select id="txtKeyword" name="txtKeyword">
	 	<option value="">รายการทั้งหมด</option>
    	<option value="Available">ว่าง</option>
   	 	<option value="Busy">ไม่ว่าง</option>
	</select>&nbsp;&nbsp;
	<button type="submit" class="btn btn-primary mb-2" id="search" >ค้นหา</button>
	</form>

	
<!--ส่วนตารางเเสดงข้อมูล-->
<table  class="table table-hover container">
				<tr>
				<th scope="col">รหัสอุปกรณ์</th>
                    <th scope="col">รายละเอียด</th>
                    <th scope="col">รูป</th>
                    <th scope="col">สถานะ</th>
					<th scope="col"></th>
				</tr>
				<?php 
				$temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
  				<tr>
 					<th scope="row"><?=$row['itemid']?></th>
                    <td> <?=$row['Name']?></td>
                    <td><img src="image/<?=$row['img'];?>" width="100" height="100"></td>
                    <td><?=$row['Status']?></td>
					<td><button name="lent" type="submit" class="btn btn-primary mb-2">ยืม</button>
				</tr>
				<?php
				$temp++;
				}?> 
				<?php if ($temp == 0){
					echo  "<p> <font color=red font face='verdana' size='5pt'>ไม่มีรายการอุปกรณ์ที่ค้นหา</font> </p>";
				} ?>
				
			</table>
<?php
mysqli_close($conn);
?>
</div>
<!--------------------Footer---------------------------->
<?php include "footer.php"?>
<!--------------------Footer---------------------------->