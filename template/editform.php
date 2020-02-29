<?php include "headtest.php" ?>
<?php
   $serverName = "10.199.66.227";
   $userName = "20S2_g4";
   $userPassword = "Dwg7Q6UQ";
   $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$sql = "SELECT * FROM item "  ;
	$query = mysqli_query($conn,$sql);
?>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">

<div class="container">
	&nbsp;
  <h2>แก้ไขข้อมูล</h2>
  <hr>
  <details>
  <summary><strong>ที่มา รหัสครุภัณฑ์: *ตัวอย่าง* รหัสครุภัณฑ์: 5602070000053</strong></summary>
				<li>56 คือ ปีงบประมาณ</li>
				<li>02 คือ คณะวิทยาศาสตร์</li>
				<li>07 คือ ประภทครุภัณฑ์โฆษณาและเผยแพร่</li>
				<li>00 คือ กลุ่มย่อย ถ้าไม่มีกลุ่มย่อย จะเป็น 00</li>
				<li>053 คือ running</li>
		</ul>
</details>
<hr>
	<form class="form-inline" action="/action_page.php">
		<details>
  					<summary><strong>ข้อมูลเกี่ยวกับครุภัณฑ์:</strong></summary>&nbsp;
			<div >
				<div class="row">
					<div class="col-4">
					
						<label for="email2"> ประเภทครุภัณฑ์:</label>
						<select class="form-control mb-2 mr-sm-2">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="01">1 : อาคารถาวร</option>
							<option value="02">2 : อาคารชั่วคราว/โรงเรียน</option>
							<option value="03">3 : สิ่งก่อสร้าง</option>
							<option value="04">4 : ครุภัณฑ์โรงงาน</option>
							<option value="05">5 : ครุภัณฑ์ยานพาหนะและขนส่ง</option>
							<option value="06">6 : ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
							<option value="07">7 : ครุภัณฑ์โฆษณาและเผยแพร่</option>
							<option value="08">8 : ครุภัณฑ์การเกษตร</option>
							<option value="09">9 : ครุภัณฑ์โรงงาน</option>
							<option value="10">10 : ครุภัณฑ์ก่อสร้าง</option>
							<option value="11">11 : ครุภัณฑ์สำรวจ</option>
							<option value="12">12 : ครุภัณฑ์วิทยาศาตร์การแพทย์</option>
							<option value="13">13 : ครุภัณฑ์คอมพิวเตอร์</option>
							<option value="14">14 : ครุภัณฑ์การศึกษา</option>
							<option value="15">15 : ครุภัณฑ์งานบ้านงานครัว</option>
							<option value="16">16 : ครุภัณฑ์กีฬา</option>
							<option value="17">17 : ครุภัณฑ์ดนตรีและนาฏศิลป์</option>
							<option value="18">18 : ครุภัณฑ์อาวุธ</option>
							<option value="19">19 : ครุภัณฑ์สนาม</option>
						</select>
					</div>
					<div class="col-4">
						<label for="email2"> รหัสครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2" required name="ItemID" pattern="[0-9]{13}">

					</div>
					<div class="col-4">
						<label for="email2">ชื่อครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2" required name="ItemName">
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label for="email2" >รายละเอียดครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2" required name="Detail">

					</div>
					<div class="col-4">
						<label for="email2">ราคาครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2"  name="Price" pattern="[0-9]">
					</div>
					<div class="col-4">
						<label for="email2" >ตำแหน่งของครุภัณฑ์</label>
						<input type="text" class="form-control mb-2 mr-sm-2"  name="Building">
					</div>
				</div>
				<div class="row">
					<div class="col-4">

					<label for="email2">สถานะครุภัณฑ์</label>
						<select class="form-control mb-2 mr-sm-2" name="Status">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="ปกติ" >ปกติ</option>
							<option value="ถูกยืม" >ถูกยืม</option>
							<option value="กำลังซ่อม" >กำลังซ่อม</option>
							<option value="ปลดระวาง" >ปลดระวาง</option>
						</select>
						<!-- <label for="email2" >สถานะ</label>
						<input type="text" class="form-control mb-2 mr-sm-2" required name="Detail"> -->

					</div>
					<div class="col-4">
						<label for="email2">แก้ไขข้อมูลเมื่อวันที่</label>
						<input type="date" class="form-control mb-2 mr-sm-2"  name="Editdate" required >
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
						<select class="form-control mb-2 mr-sm-2" name="TeacherRight">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="1" >อนุญาต</option>
							<option value="0" >ไม่อนุญาต</option>
						</select>
							<!-- <label for="email2" >สิทธิ์ให้ยืมในฐานะอาจารย์</label>
							<input type="text" class="form-control mb-2 mr-sm-2"  name="email"> -->

						</div>
						<div class="col-4">
						<label for="email2">สิทธิ์ให้ยืมในฐานะบุคลากร</label>
						<select class="form-control mb-2 mr-sm-2" name="StaffRight">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="1">อนุญาต</option>
							<option value="0">ไม่อนุญาต</option>
						</select>
							<!-- <label for="email2">สิทธิ์ให้ยืมในฐานะบุคลากร</label>
							<input type="text" class="form-control mb-2 mr-sm-2"  name="email"> -->
						</div>
						<div class="col-4">
						<label for="email2">สิทธิ์ให้ยืมในฐานะนักศึกษา</label>
						<select class="form-control mb-2 mr-sm-2" name="StudentRight">
							<option value="" disabled selected>เลือกตัวเลือกของคุณ</option>
							<option value="1">อนุญาต</option>
							<option value="0">ไม่อนุญาต</option>
						</select>
							<!-- <label for="email2" >สิทธิ์ให้ยืมในฐานะนักศึกษา</label>
							<input type="text" class="form-control mb-2 mr-sm-2"  name="email"> -->
						</div>
					</details>
					<hr>
					<button type="submit" class="btn btn-primary mb-2">ยืนยันการแก้ไข</button>
				</div>
	</form>
	
</div>
<!--------------------Footer---------------------------->
<?php include "footer.php"?>
<!--------------------Footer---------------------------->

			