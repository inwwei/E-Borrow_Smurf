<!--------------------Header---------------------------->
<?php 
session_start();
    if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");
    }
?>
<?php include "HeadAdmin.php" ?>

<br>
<div class="tcenter">
    <img src="logo/logo_add.png" width="180px" />
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
                        <li>กรอกข้อมูลโดยเลือกจากรายการ เช่น ครุภัณฑ์โรงงาน</li>

                        <b>รหัสครุภัณฑ์ ตัวอย่าง 56020700053</b>
                        <li>56 คือ ปีงบประมาณ</li>
                        <li>02 คือ คณะวิทยาศาสตร์</li>
                        <li>07 คือ ประภทครุภัณฑ์โฆษณาและเผยแพร่</li>
                        <li>00 คือ กลุ่มย่อย ถ้าไม่มีกลุ่มย่อย จะเป็น 00</li>
                        <li>053 คือ running number</li>

                        <b>ชื่อครุภัณฑ์</b>
                        <li>เช่น เครื่องทำลายเอกสาร</li>

                        <b>รายละเอียดครุภัณฑ์</b>
                        <li>เช่น IDEAL 3104</li>

                        <b>รายละเอียดครุภัณฑ์</b>
                        <li>เช่น 500000</li>

                        <b>ตำแหน่งครุภัณฑ์ ตัวอย่าง 8504</b>
                        <li>8 คือ ตึก sc.08</li>
                        <li>5 คือ ชั้น 5</li>
                        <li>04 คือ ห้อง 04</li>

                        <b>สถานะ</b>
                        <li>กรอกข้อมูลโดยเลือกจากรายการ เช่น ปลดระวาง</li>



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
                                        <?php
                                        $serverName = "10.199.66.227";
                                        $userName = "20S2_g4";
                                        $userPassword = "Dwg7Q6UQ";
                                        $dbName = "20s2_g4";
                                        $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                                        mysqli_set_charset($conn, "utf8");
                                        $sql = "SELECT * FROM item , type , status 
                                        where item.TypeID = type.ID 
                                        AND item.Statusref = Status.IDst 
                                        AND Status.StatusName LIKE '%".$strKeyword."%'
                                        AND type.TypeName LIKE '%".$TypKeyword."%'"  ;
                                        $query = mysqli_query($conn,$sql);

                                        $strSQL = "SELECT * FROM type ";
                                        $result = mysqli_query($conn, $strSQL);
                                        while($objResuut= mysqli_fetch_array($result)) 
                                            {
                                            echo "<option value='" .$objResuut['ID'] . "'>" .$objResuut['TypeName'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label for="email2">รหัสครุภัณฑ์</label>
                                    <input type="text" name="ItemID" class="form-control" pattern="\d{13}"
                                        title="รหัสครุภัณฑ์ ไม่ถูกต้อง" placeholder="xxxxxxxxxxxxx"  required>
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
                                    <input type="text" name="Price" class="form-control" 
                                        placeholder="กรอกราคา" />
                                </div>

                                <div class="col-6">
                                    <label for="email2">ตำเเหน่งของครุภัณฑ์</label>
                                    <input type="text" name="Building" class="form-control" 
                                        placeholder="กรอกตำเเหน่ง" />
                                </div>

                                <div class="col-6">
                                    <label for="email2">สถานะ</label>
                                    <select class="custom-select d-block " id="Statusref" name="Statusref">
                                        <option value="1">ปกติ</option>
                                        <option value="2">จำหน่ายออก</option>
                                        <option value="3">ถูกยืม</option>
                                        <option value="4">ปลดระวาง</option>
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
                            <div class="row">

                                <div class="col-12">
                                    <label for="email2"> สิทธิ์อาจารย์</label>
                                    <select class="custom-select d-block " id="TeacherRight" name="TeacherRight">
                                        <option value="อนุญาต">อนุญาต</option>
                                        <option value="ไม่อนุญาต">ไม่อนุญาต</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="email2">สิทธิ์บุคลากร</label>
                                    <select class="custom-select d-block " id="StaffRight" name="StaffRight">
                                        <option value="อนุญาต">อนุญาต</option>
                                        <option value="ไม่อนุญาต">ไม่อนุญาต</option>
                                    </select>

                                </div>

                                <div class="col-12">
                                    <label for="email2">สิทธิ์นักศึกษา</label>
                                    <select class="custom-select d-block " id="StudentRight" name="StudentRight">
                                        <option value="อนุญาต">อนุญาต</option>
                                        <option value="ไม่อนุญาต">ไม่อนุญาต</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="AddDate">วันเวลาที่เพิ่ม (date and time):</label>
                                    <input type="datetime-local" id="birthdaytime" name="Add_Date" class="form-control mb-2 mr-sm-2">
                                </div>

                            </div>

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