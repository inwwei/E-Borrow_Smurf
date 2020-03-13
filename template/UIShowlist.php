<!--------------------Header---------------------------->
<?php 
session_start();
    if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");
    }
?>
<?php include "headtest.php" ?>

<div class="container "><br>


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
	$sechKeyword = null;

	if(isset($_POST["secKeyword"]))
	{
		$sechKeyword = $_POST["secKeyword"];
	}
?>

    <?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$TypKeyword = null;

	if(isset($_POST["TypeKeyword"]))
	{
		$TypKeyword = $_POST["TypeKeyword"];
	}
?>
    <?php
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";

//    $serverName = "10.199.66.227";
//    $userName = "20S2_g4";
//    $userPassword = "Dwg7Q6UQ";
   $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT * FROM item , type , status where item.TypeID = type.ID AND item.Statusref = Status.IDst AND Status.StatusName LIKE '%".$strKeyword."%'AND type.TypeName LIKE '%".$TypKeyword."%'"  ;

    $query = mysqli_query($conn,$sql);
?>
    
    <div class="page-content">
        <img src="image/Untitled-2.jpg" />
    </div><br>

    <div class="container">
        <div class="row newfont">
            <div class="col">
                <div>
                    <h2>&nbsp;รายการครุภัณฑ์</h2>
                </div>
            </div>
            <div class="row">
                <!--ส่วนบอกสถานะว่าง-ไม่ว่าง-->

                <form class="form-inline" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                    <h6>ประเภทครุภัณฑ์ :</h6>&nbsp;&nbsp;
                    <select class="custom-select d-block " id="TypeKeyword" name="TypeKeyword">
                        <option value="">ประเภทครุภัณฑ์</option>
                        <option value="อาคารถาวร">อาคารถาวร</option>
                        <option value="อาคารชั่วคราว/โรงเรียน">อาคารชั่วคราว/โรงเรียน</option>
                        <option value="สิ่งก่อสร้าง">สิ่งก่อสร้าง</option>
                        <option value="ครุภัณฑ์โรงงาน">ครุภัณฑ์โรงงาน</option>
                        <option value="ครุภัณฑ์ยานพาหนะและขนส่ง">ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                        <option value="ครุภัณฑ์ไฟฟ้าและวิทยุ">ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                        <option value="ครุภัณฑ์โฆษณาและเผยแพร่">ครุภัณฑ์โฆษณาและเผยแพร่</option>
                        <option value="ครุภัณฑ์การเกษตร">ครุภัณฑ์การเกษตร</option>
                        <option value="ครุภัณฑ์โรงงาน">ครุภัณฑ์โรงงาน</option>
                        <option value="ครุภัณฑ์ก่อสร้าง">ครุภัณฑ์ก่อสร้าง</option>
                        <option value="ครุภัณฑ์สำรวจ">ครุภัณฑ์สำรวจ</option>
                        <option value="ครุภัณฑ์วิทยาศาตร์การแพทย์">ครุภัณฑ์วิทยาศาตร์การแพทย์</option>
                        <option value="ครุภัณฑ์คอมพิวเตอร์">ครุภัณฑ์คอมพิวเตอร์</option>
                        <option value="ครุภัณฑ์การศึกษา">ครุภัณฑ์การศึกษา</option>
                        <option value="ครุภัณฑ์งานบ้านงานครัว">ครุภัณฑ์งานบ้านงานครัว</option>
                        <option value="ครุภัณฑ์กีฬา">ครุภัณฑ์กีฬา</option>
                        <option value="ครุภัณฑ์ดนตรีและนาฏศิลป์">ครุภัณฑ์ดนตรีและนาฏศิลป์</option>
                        <option value="ครุภัณฑ์อาวุธ">ครุภัณฑ์อาวุธ</option>
                        <option value="ครุภัณฑ์สนาม">ครุภัณฑ์สนาม</option>
                    </select>&nbsp;&nbsp;
                    <h6>สถานะครุภัณฑ์ :</h6>&nbsp;&nbsp;
                    <select class="custom-select d-block " id="txtKeyword" name="txtKeyword">
                        <option value="">รายการทั้งหมด</option>
                        <option value="ปกติ">ปกติ</option>
                        <option value="ไม่ว่าง">ไม่ว่าง</option>
                        <option value="ซ่อมบำรุง">ซ่อมบำรุง</option>
                        <option value="ปลดระวาง">ปลดระวาง</option>
                    </select>&nbsp;&nbsp;
                    <!--ส่วนค้นหารายการ
                    <input class="form-control " name="secKeyword" type="text" id="secKeyword"
                        placeholder="กรอกชื่ออุปกรณ์ที่จะค้นหา" value="">&nbsp;&nbsp;-->
                    <button type="submit" class="btn btn-secondary my-1"
                        id="search">ค้นหา</button>&nbsp;&nbsp;&nbsp;&nbsp;
                </form><br>
            </div>

        </div><br>
        <!--ส่วนตารางเเสดงข้อมูล-->

        <table class="table container center tcenter newfont">
            <tr style="background-color: #ff9999">
                <th scope="col" class="zen" style="width: 10px;">ลำดับ</th>
                <th scope="col" class="zen" style="width: 150px;">รหัสครุภัณฑ์</th>
                <th scope="col" class="zen" style="width: 290px;">รายละเอียด</th>
                <th scope="col" class="zen" style="width: 150px;">ประเภท</th>
                <th scope="col" class="zen" style="width: 85px;">สถานะ</th>
                <th scope="col" class="zen" style="width: 105px;">ตำแหน่ง</th>
                <th scope="col" class="zen" style="width: 120px;"></th>
            </tr>
        </table>

        <div style=" height: 400px; overflow-y: scroll;">

            <table class="table container center table-hover">

                <?php 
				$temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>
                    <td class="zen tcenter" style="width: 65px;"><?=$row['IDs']?></td>
                    <td class="zen tcenter" style="width: 150px;"><?=$row['ItemID']?></td>
                    <td class="zen " style="width: 285px;"><?=$row['ItemName']?></td>
                    <td class="zen tcenter" style="width: 150px;"><?=$row['TypeName']?></td>
                    <td class="zen tcenter" style="width: 85px;"><?=$row['StatusName']?></td>
                    <td class="zen tcenter" style="width: 105px;"><?=$row['Building']?></td>
                    <td scope="row" class="zen tcenter" style="width: 100px;"><a a href='borrowform.php?ItemID=<?php echo $row['ItemID'] ?>&&IDs=<?php echo $row['IDs'] ?>&&userID=<?php echo $_SESSION['userName'] ?>&&status=<?php echo $row['IDst'] ?> '><button name="lent" type="submit"
                            class="btn btn-secondary mb-2">ยืม</button></a>
                </tr>

                <?php
				$temp++;
				}?>
                <?php if ($temp == 0){
					echo  "<p> <font color=red font face='verdana' size='5pt'>ไม่มีรายการอุปกรณ์ที่ค้นหา</font> </p>";
				} ?>

            </table>
        </div>

    </div>
    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->