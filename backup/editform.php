<?php include "headtest.php"?>
<script type="text/javascript">
function fncSubmit()
{
    
    if(document.getElementById('ItemID').value == "")
    {
        alert('กรุณากรอกรหัสครุภัณฑ์');
        return false;
    }
    if(document.getElementById('TypeID').value == "")
    {
        alert('กรุณาเลือกประเภทของครุภัณฑ์');
        return false;
    }
    if(document.getElementById('ItemName').value == "")
    {
        alert('กรุณากรอกชื่อครุภัณฑ์');
        return false;
    }
    
    if(document.getElementById('Price').value == "")
    {
        alert('กรุณากรอกราคาครุภัณฑ์');
        return false;
    }if(document.getElementById('TeacherRight').value == "")
    {
      alert('กรุณาเลือกสถานะสิทธิ์สำหรับอาจารย์');
      return false;
    } if(document.getElementById('StaffRight').value == "")
    {
        alert('กรุณาเลือกสถานะสิทธิ์บุคคลากร');
        return false;
    }if(document.getElementById('StudentRight').value == "")
    {
      alert('กรุณาเลือกสถานะสิทธิ์สำหรับนักศึกษา');
      return false;
    }if(document.getElementById('Status').value == "")
    {
      alert('กรุณาเลือกสถานะของครุภัณฑ์');
      return false;
    }   
    
    
}
</script>

<?php

$serverName = "10.199.66.227";
$userName = "20S2_g4";
$userPassword = "Dwg7Q6UQ";
$dbName = "20S2_g4";

// $serverName = "localhost";
// $userName = "root";
// $userPassword = "";
// $dbName = "20S2_g4";



$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
mysqli_set_charset($conn, "utf8");


$IDs = $_GET['IDs'];
if (isset($_GET['ItemID'])) {
    $ItemID = $_GET['ItemID'];
    $sql = "SELECT * FROM item WHERE ItemID = '$ItemID'";

    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
}
if (isset($_POST['ItemID'])) {
	
    $TypeID = $_REQUEST['TypeID'];
    $ItemID = $_REQUEST['ItemID'];
    $ItemName = $_REQUEST['ItemName'];
    $Detail = $_REQUEST['Detail'];
    $Price = $_REQUEST['Price'];
    $Building = $_REQUEST['Building'];
    $TeacherRight = $_REQUEST['TeacherRight'];
    $StaffRight = $_REQUEST['StaffRight'];
    $StudentRight = $_REQUEST['StudentRight'];
    $Status = $_REQUEST['Status'];

    $sql = "UPDATE item SET TypeID='$TypeID',
				ItemID='$ItemID',
				ItemName='$ItemName',
				Detail='$Detail',
				Price='$Price',
				Building='$Building',
				TeacherRight='$TeacherRight',
				StaffRight='$StaffRight',
				StudentRight='$StudentRight',
				Status='$Status'
				WHERE IDs =$IDs";
	$result = mysqli_query($conn, $sql);
	
	if($result){
    
    
		echo "<script type='text/javascript'>";
		
		echo "window.location = 'Maintain.php'; ";		
		echo "alert('แก้ไขข้อมูลสำเร็จ');";
		echo "</script>";
		}
    // if(isset($sql)){
    //     $message = 'data updated successfully';
    // }else{

    //     $message = 'data updated false!';

    // }
}
?>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">

<div class="container">
	&nbsp;

  <h2>แก้ไขข้อมูล</h2>
  <?php if (!empty($message)): ?>

	<div class="alert alert-success">
		<?php echo $message ?>
  	</div>
  <?php endif;?>
  <!-- <details>
  <summary><strong>ที่มา รหัสครุภัณฑ์: *ตัวอย่าง* รหัสครุภัณฑ์: 5602070000053</strong></summary>
				<li>56 คือ ปีงบประมาณ</li>
				<li>02 คือ คณะวิทยาศาสตร์</li>
				<li>07 คือ ประภทครุภัณฑ์โฆษณาและเผยแพร่</li>
				<li>00 คือ กลุ่มย่อย ถ้าไม่มีกลุ่มย่อย จะเป็น 00</li>
				<li>053 คือ running</li>
		</ul>
</details> -->
<hr>
	<form class="form-inline" method="POST" onSubmit="JavaScript:return fncSubmit();">
		<details>
  					<summary><strong>ข้อมูลเกี่ยวกับครุภัณฑ์:</strong></summary>&nbsp;
			<div >
				<div class="row">
					<div class="col-3">

						<label for="email2"> ประเภทครุภัณฑ์:</label>


							<!-- <option value="1">1 : อาคารถาวร</option>
							<option value="2">2 : อาคารชั่วคราว/โรงเรียน</option>
							<option value="3">3 : สิ่งก่อสร้าง</option>
							<option value="4">4 : ครุภัณฑ์โรงงาน</option>
							<option value="5">5 : ครุภัณฑ์ยานพาหนะและขนส่ง</option>
							<option value="6">6 : ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
							<option value="7">7 : ครุภัณฑ์โฆษณาและเผยแพร่</optiovalue="
							<option value="8">8 : ครุภัณฑ์การเกษตร</option>
							<option value="9">9 : ครุภัณฑ์โรงงาน</option>
							<option value="10">10 : ครุภัณฑ์ก่อสร้าง</option>
							<option value="11">11 : ครุภัณฑ์สำรวจ</option>
							<option value="12">12 : ครุภัณฑ์วิทยาศาตร์การแพทย์</option>
							<option value="13">13 : ครุภัณฑ์คอมพิวเตอร์</option>
							<option value="14">14 : ครุภัณฑ์การศึกษา</option>
							<option value="15">15 : ครุภัณฑ์งานบ้านงานครัว</option>
							<option value="16">16 : ครุภัณฑ์กีฬา</option>
							<option value="17">17 : ครุภัณฑ์ดนตรีและนาฏศิลป์</option>
							<option value="18">18 : ครุภัณฑ์อาวุธ</option>
							<option value="19">19 : ครุภัณฑ์สนาม</option>  -->
						<select class="form-control mb-2 mr-sm-2" name="TypeID" id="TypeID">

													<?php
							$TypeID = $row['TypeID'];
							$res2 = mysqli_query($conn, "SELECT * FROM  type WHERE ID =  $TypeID");
							$res3 = mysqli_query($conn, "SELECT * FROM  type");
							while ($row2 = mysqli_fetch_array($res2)) {

								echo "<option value=" . $row2['ID'] . ">" . $row2['TypeName'] . "</option>";

								while ($row3 = mysqli_fetch_array($res3)) {

									echo "<option value=" . $row3['ID'] . ">" . $row3['TypeName'] . "</option>";

								}
							}?>
						</select>
					</div>
					<div class="col-2">
						<label for="email2"> รหัสครุภัณฑ์</label>
						<input type="int" class="form-control mb-2 mr-sm-2" value="<?php echo $row['ItemID']; ?>"  name="ItemID" id="ItemID" pattern="[0-9]{13}">

					</div>
					<div class="col-7">
						<label for="email2">ชื่อครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $row['ItemName']; ?>" id="ItemName"  name="ItemName">
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<label for="email2" >ตำแหน่งของครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $row['Building']; ?>" id="Building" name="Building">
					</div>
					<div class="col-2">
						<label for="email2">ราคาครุภัณฑ์</label>
						<input type="int" class="form-control mb-2 mr-sm-2"  value="<?php echo $row['Price']; ?>" id="Price" name="Price">
					</div>
					<div class="col-7">
						<label for="email2" >รายละเอียดครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $row['Detail']; ?>" id="Detail"  name="Detail">

					</div>


				</div>
				<div class="row">
					<div class="col-3">

					<label for="email2">สถานะครุภัณฑ์</label>
					<select class="form-control mb-2 mr-sm-2" id="Status" name="Status">

						<?php
$Status = $row['Status'];
$res2 = mysqli_query($conn, "SELECT * FROM  item WHERE Status =  $Status");

while ($row2 = mysqli_fetch_array($res2)) {
    echo "<option value=" . $row2['Status'] . ">" . $row2['Status'] . "</option>";
}?>
							<option value="ปกติ" >ปกติ</option>
							<option value="ถูกยืม" >ถูกยืม</option>
							<option value="กำลังซ่อม" >กำลังซ่อม</option>
							<option value="ปลดระวาง" >ปลดระวาง</option>
						</select>
						<!-- <label for="email2" >สถานะ</label>
						<input type="text" class="form-control mb-2 mr-sm-2"  name="Detail"> -->

					</div>

				</div>
				</div>
				</details>
				<hr>
				<details>
  					<summary><strong>กำหนดสิทธิ์ให้ยืม</strong></summary>&nbsp;
					<div class="row">
						<div class="col-4">
						<label for="email2">สิทธิ์ให้ยืมในฐานะอาจารย์</label>
						<select class="form-control mb-2 mr-sm-2" id="TeacherRight" name="TeacherRight">
							<?php
								$ItemID = $_GET['ItemID'];
								$res2 = mysqli_query($conn, "SELECT TeacherRight FROM  item WHERE ItemID =  $ItemID");

								while ($row2 = mysqli_fetch_array($res2)) {
									echo "<option value=" . $row2['TeacherRight'] . ">" . $row2['TeacherRight'] . "</option>";
								}?>
							<option value="อนุญาต">อนุญาต</option>
							<option value="ไม่อนุญาต">ไม่อนุญาต</option>
						</select>
						<!-- <label for="email2">สิทธิ์ให้ยืมในฐานะอาจารย์</label>
						<select class="form-control mb-2 mr-sm-2" name="TeacherRight" id="TeacherRight">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="อนุญาต" >อนุญาต</option>
							<option value="ไม่อนุญาต" >ไม่อนุญาต</option>
						</select> -->
							<!-- <label for="email2" >สิทธิ์ให้ยืมในฐานะอาจารย์</label>
							<input type="text" class="form-control mb-2 mr-sm-2"  name="email"> -->

						</div>
						<div class="col-4">
						<label for="email2">สิทธิ์ให้ยืมในฐานะบุคคลากร</label>
						<select class="form-control mb-2 mr-sm-2" id="StaffRight" name="StaffRight">
							<?php
								$ItemID = $_GET['ItemID'];
								$res3 = mysqli_query($conn, "SELECT StaffRight FROM  item WHERE ItemID =  $ItemID");

								while ($row3 = mysqli_fetch_array($res3)) {
									echo "<option value=" . $row3['StaffRight'] . ">" . $row3['StaffRight'] . "</option>";
								}?>
							<option value="อนุญาต">อนุญาต</option>
							<option value="ไม่อนุญาต">ไม่อนุญาต</option>
						</select>
						<!-- <select class="form-control mb-2 mr-sm-2" name="StaffRight" id="StaffRight">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="อนุญาต">อนุญาต</option>
							<option value="ไม่อนุญาต">ไม่อนุญาต</option>
						</select> -->
							<!-- <label for="email2">สิทธิ์ให้ยืมในฐานะบุคลากร</label>
							<input type="text" class="form-control mb-2 mr-sm-2"  name="email"> -->
						</div>
						<div class="col-4">
						<label for="email2">สิทธิ์ให้ยืมในฐานะนักศึกษา</label>
						<select class="form-control mb-2 mr-sm-2" id="StudentRight" name="StudentRight">
							<?php
								$ItemID = $_GET['ItemID'];
								$res4 = mysqli_query($conn, "SELECT StudentRight FROM  item WHERE ItemID =  $ItemID");

								while ($row4 = mysqli_fetch_array($res4)) {
									echo "<option value=" . $row4['StudentRight'] . ">" . $row4['StudentRight'] . "</option>";
								}?>
							<option value="อนุญาต">อนุญาต</option>
							<option value="ไม่อนุญาต">ไม่อนุญาต</option>
						</select>
						<!-- <select class="form-control mb-2 mr-sm-2" name="StudentRight" id="StudentRight">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="อนุญาต">อนุญาต</option>
							<option value="ไม่อนุญาต">ไม่อนุญาต</option>
						</select> -->
							<!-- <label for="email2" >สิทธิ์ให้ยืมในฐานะนักศึกษา</label>
							<input type="text" class="form-control mb-2 mr-sm-2"  name="email"> -->
						</div>
					</details>
					<hr>

					<div class="row">
						<div class="col-4">
							<a href='Maintain.php'><button type="button" name="back" class="btn btn-secondary">ย้อนกลับ</button></a>
							<button type="submit"  class="btn btn-success" name="btnsuccess">ยืนยันการแก้ไข</button>
						</div>
					</div>
				</div>
	</form>

</div>
<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->
