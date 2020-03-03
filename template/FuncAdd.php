<!--------------------Header---------------------------->
<?php include "headtest.php" ?>
<div class="container"><br>

<!--------------------Form รับข้อมูล---------------------------->
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center"> Add Item </h4>
      <hr />
      <form  name="addproduct" action="FuncAdd.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-8">
          ประเภทครุภัณฑ์ 
          <select class="custom-select d-block " id="TypeID" name="TypeID">
              <option value="">ประเภทครุภัณฑ์</option>
              <option value="1">อาคารถาวร</option>
              <option value="2">อาคารชั่วคราว/โรงเรียน</option>
              <option value="3">สิ่งก่อสร้าง</option>
              <option value="4">ครุภัณฑ์โรงงาน</option>
              <option value="5">ครุภัณฑ์ยานพาหนะและขนส่ง</option>
              <option value="6">ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
              <option value="7">ครุภัณฑ์โฆษณาและเผยแพร่</option>
              <option value="8">ครุภัณฑ์การเกษตร</option>
              <option value="9">ครุภัณฑ์โรงงาน</option>
              <option value="10">ครุภัณฑ์ก่อสร้าง</option>
              <option value="11">ครุภัณฑ์สำรวจ</option>
              <option value="12">ครุภัณฑ์วิทยาศาตร์การแพทย์</option>
              <option value="13">ครุภัณฑ์คอมพิวเตอร์</option>
              <option value="14">ครุภัณฑ์การศึกษา</option>
              <option value="15">ครุภัณฑ์งานบ้านงานครัว</option>
              <option value="16">ครุภัณฑ์กีฬา</option>
              <option value="17">ครุภัณฑ์ดนตรีและนาฏศิลป์</option>
              <option value="18">ครุภัณฑ์อาวุธ</option>
              <option value="19">ครุภัณฑ์สนาม</option>
          </select><br>
            
            รหัสครุภัณฑ์ 
            <input type="text"  name="ItemID" class="form-control" pattern="[0-9]{1,}" title="รหัสครุภัณฑ์ ไม่ถูกต้อง" required>
            <br>
            
            ชื่อครุภัณฑ์ 
            <input type="text"  name="ItemName" class="form-control" required placeholder="ชื่อครุภัณฑ์" />
            <br>

            รายละครุภัณฑ์ 
            <input type="text"  name="Detail" class="form-control" required placeholder="กรอกรายละเอียด" />
            <br>

            ราคา 
            <input type="text"  name="Price" class="form-control" required placeholder="กรอกราคา" />
            <br>

            ตำเเหน่ง 
            <input type="text"  name="Building" class="form-control" required placeholder="กรอกตำเเหน่ง" />
            <br>

            สิทธิ์อาจารย์ 
            <select class="custom-select d-block " id="TeacherRight" name="TeacherRight">
              <option value="อนุญาต">อนุญาต</option>
              <option value="ไม่อนุญาต">ไม่อนุญาต</option>
            </select><br>

            สิทธิ์บุคลากร 
            <select class="custom-select d-block " id="StaffRight" name="StaffRight">
              <option value="อนุญาต">อนุญาต</option>
              <option value="ไม่อนุญาต">ไม่อนุญาต</option>
            </select><br>

            สิทธิ์นักศึกษา 
            <select class="custom-select d-block " id="StudentRight" name="StudentRight">
              <option value="อนุญาต">อนุญาต</option>
              <option value="ไม่อนุญาต">ไม่อนุญาต</option>
            </select><br>
            
            สถานะ 
            <select class="custom-select d-block " id="Status" name="Status">
              <option value="ปกติ">ปกติ</option>
              <option value="ไม่ว่าง">ไม่ว่าง</option>
              <option value="ซ่อมบำรุง">ซ่อมบำรุง</option>
              <option value="ปลดระวาง">ปลดระวาง</option>
            </select><br>
            
            <label for="AddDate">วันเวลาที่เพิ่ม (date and time):</label>
            <input type="datetime-local" id="birthdaytime" name="AddDate">
            

          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" name="btnadd"> Save </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--------------------Form รับข้อมูล---------------------------->



<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->