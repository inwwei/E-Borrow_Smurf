<!--------------------Header---------------------------->
<?php 
    session_start();
      if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");

    }
?>
<?php include "headtest.php" ?>
<br>
<div class="tcenter">
    <img src="logo/logo_add.png" width="200px" />
</div>
<div>
    <h2 class="tcenter newfont">เพิ่มรายการครุภัณฑ์</h2>
</div><br>

<!--------------------Form รับข้อมูล---------------------------->
<div class="container linecerv ">

    <div>
        <div></div><br>
        <div>
            <details style="font-size: 20px">
                <summary class="tcenter newfont"><strong>เงื่อนไขการเพิ่มรายการครุภัณฑ์</strong></summary>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-5">
                        
                        <b>ประเภทครุภัณฑ์ </b>
                        <li>กรอกข้อมูลโดยเลือกจากรายการ เช่น  ครุภัณฑ์โรงงาน</li>

                        <b>รหัสครุภัณฑ์ ตัวอย่าง 56020700053</b>
                        <li>56 คือ ปีงบประมาณ</li>
                        <li>02 คือ คณะวิทยาศาสตร์</li>
                        <li>07 คือ ประภทครุภัณฑ์โฆษณาและเผยแพร่</li>
                        <li>00 คือ กลุ่มย่อย ถ้าไม่มีกลุ่มย่อย จะเป็น 00</li>
                        <li>053 คือ running number</li>
                        
                        <b>ชื่อครุภัณฑ์</b>
                        <li>เช่น  เครื่องทำลายเอกสาร</li>

                        <b>รายละเอียดครุภัณฑ์</b>
                        <li>เช่น  IDEAL 3104</li>

                        <b>รายละเอียดครุภัณฑ์</b>
                        <li>เช่น  500000</li>

                        <b>ตำแหน่งครุภัณฑ์ ตัวอย่าง 8504</b>
                        <li>8 คือ ตึก sc.08</li>
                        <li>5 คือ ชั้น 5</li>
                        <li>04 คือ ห้อง 04</li>

                        <b>สถานะ</b>
                        <li>กรอกข้อมูลโดยเลือกจากรายการ เช่น  ปลดระวาง</li>

                        
                        
                    </div>
                    <div class="col-3"></div>
                </div>




            </details>
            <hr>
            <!-- <h2 class="tcenter"> เพิ่มรายการครุภัณฑ์ </h2> -->

            <form name="addproduct" action="FuncAdd.php" method="POST" enctype="multipart/form-data"
                class="form-horizontal">

                <details style="font-size: 20px">
                    <summary class="tcenter newfont"><strong>&nbsp;&nbsp;กรอกข้อมูลเกี่ยวกับครุภัณฑ์</strong></summary>
                    <br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    <label for="email2"> ประเภทครุภัณฑ์:</label>
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
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="email2">รหัสครุภัณฑ์</label>
                                    <input type="text" name="ItemID" class="form-control" pattern="[0-9]{1,}"
                                        title="รหัสครุภัณฑ์ ไม่ถูกต้อง" placeholder="xxxxxxxxxxxxx" required>
                                </div>

                                <div class="col-6">
                                    <label for="email2">ชื่อครุภัณฑ์</label>
                                    <input type="text" name="ItemName" class="form-control" required
                                        placeholder="ชื่อครุภัณฑ์" />
                                </div>

                                <div class="col-6">
                                    <label for="email2">รายละเอียดครุภัณฑ์</label>
                                    <input type="text" name="Detail" class="form-control" required
                                        placeholder="กรอกรายละเอียด" />
                                </div>

                                <div class="col-6">
                                    <label for="email2">ราคา</label>
                                    <input type="text" name="Price" class="form-control" required
                                        placeholder="กรอกราคา" />
                                </div>

                                <div class="col-6">
                                    <label for="email2">ตำเเหน่งของครุภัณฑ์</label>
                                    <input type="text" name="Building" class="form-control" required
                                        placeholder="กรอกตำเเหน่ง" />
                                </div>

                                <div class="col-6">
                                    <label for="email2">สถานะ</label>
                                    <select class="custom-select d-block " id="Status" name="Status">
                                        <option value="ปกติ">ปกติ</option>
                                        <option value="ไม่ว่าง">ไม่ว่าง</option>
                                        <option value="ซ่อมบำรุง">ซ่อมบำรุง</option>
                                        <option value="ปลดระวาง">ปลดระวาง</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </details>
                <hr>

                <details style="font-size: 20px">

                    <summary class="tcenter newfont"><strong>&nbsp;&nbsp;&nbsp;กำหนดสิทธิ์การยืมครุภัณฑ์</strong>
                    </summary>

                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">

                            <label for="email2"> สิทธิ์อาจารย์</label>
                            <select class="custom-select d-block " id="TeacherRight" name="TeacherRight">
                                <option value="อนุญาต">อนุญาต</option>
                                <option value="ไม่อนุญาต">ไม่อนุญาต</option>
                            </select>

                            <label for="email2">สิทธิ์บุคลากร</label>
                            <select class="custom-select d-block " id="StaffRight" name="StaffRight">
                                <option value="อนุญาต">อนุญาต</option>
                                <option value="ไม่อนุญาต">ไม่อนุญาต</option>
                            </select>

                            <label for="email2">สิทธิ์นักศึกษา</label>
                            <select class="custom-select d-block " id="StudentRight" name="StudentRight">
                                <option value="อนุญาต">อนุญาต</option>
                                <option value="ไม่อนุญาต">ไม่อนุญาต</option>
                            </select>

                            <!-- สถานะ
                            <select class="custom-select d-block " id="Status" name="Status">
                                <option value="ปกติ">ปกติ</option>
                                <option value="ไม่ว่าง">ไม่ว่าง</option>
                                <option value="ซ่อมบำรุง">ซ่อมบำรุง</option>
                                <option value="ปลดระวาง">ปลดระวาง</option>
                            </select><br> -->

                            <label for="AddDate">วันเวลาที่เพิ่ม (date and time):</label>
                            <input type="datetime-local" id="birthdaytime" name="AddDate"
                                class="form-control mb-2 mr-sm-2">

                        </div>
                        <div class="col-3"></div>
                    </div>
                </details>
        </div>

        <hr>

    </div>
    <div class="row newfont">
        <div class="col-4"></div>
        <div class="col-4 tcenter">
            <a href='Maintain.php'><button type="button" class="btn btn-secondary"
                    style="width: 100px">ย้อนกลับ</button></a>
            <button type="submit" class="btn btn-success" name="btnadd" style="width: 100px"> ยืนยัน </button>
        </div>
        <div class="col-4"></div>
    </div>
    <br>
    </form>
</div>


</div>

<!--------------------Form รับข้อมูล---------------------------->



<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->