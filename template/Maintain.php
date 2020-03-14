<!--------------------Header---------------------------->
<?php 
    session_start();
      if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");

    }
?>
<?php include "HeadAdmin.php" ?>

        
<div class="hcerv my-3 ml-5 mr-5">
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
        // echo $_SESSION['username']; 

	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$TypKeyword = null;

	if(isset($_POST["TypeKeyword"]))
	{
		$TypKeyword = $_POST["TypeKeyword"];
	}
?>
    <div class="container"><br>
        <div class="row newfont">
            <div class="col">
                <h2 class="my-3">รายการครุภัณฑ์</h2>
            </div>
            <div class="row">
                <!--ส่วนบอกสถานะว่าง-ไม่ว่าง-->
                <form class="form-inline" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                    <h6>ประเภทครุภัณฑ์ :</h6>&nbsp;&nbsp;
                    <select class="custom-select d-block " id="TypeKeyword" name="TypeKeyword">
                        <option value="">ประเภทครุภัณฑ์</option>
                        <?php
                        // $serverName = "10.199.66.227";
                        // $userName = "20S2_g4";
                        // $userPassword = "Dwg7Q6UQ";

                        $serverName = "localhost";
                        $userName = "root";
                        $userPassword = "";

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
                        
                       
                    </select>&nbsp;&nbsp;
                    <h6>สถานะครุภัณฑ์ :</h6>&nbsp;&nbsp;
                    <select class="custom-select d-block " id="txtKeyword" name="txtKeyword">
                        <option value="">รายการทั้งหมด</option>
                        <option value="ปกติ">ปกติ</option>
                        <option value="จำหน่ายออก">จำหน่ายออก</option>
                        <option value="ถูกยืม">ถูกยืม</option>
                        <option value="ปลดระวาง">ปลดระวาง</option>
                    </select>&nbsp;&nbsp;
                    <!--ส่วนค้นหารายการ
                    <input class="form-control " name="secKeyword" type="text" id="secKeyword"
                        placeholder="กรอกชื่ออุปกรณ์ที่จะค้นหา" value="">&nbsp;&nbsp;-->
                    <button type="submit" class="btn btn-secondary my-1"
                        id="search">ค้นหา</button>&nbsp;&nbsp;&nbsp;&nbsp;

                </form><br>
            </div>


        </div>
        <br>
    </div>
</div>


<div style="display: flex;justify-content: center;">
    <table class="table center tcenter newfont" style="width: 1400px">
        <tr style="background-color: #ff9999">
            <th scope="col" class="zen" style="width: 140px;">รหัสครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 210px;">ชื่อครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 140px;">รายละเอียด</th>
            <th scope="col" class="zen" style="width: 140px;">ประเภท</th>
            <th scope="col" class="zen" style="width: 60px;">สถานะ</th>
            <th scope="col" class="zen" style="width: 80px;">สถานที่</th>
            <th scope="col" class="zen" style="width: 100px;">ราคา</th>
            <th scope="col" class="zen" style="width: 70px;">สิทธิ์อาจารย์</th>
            <th scope="col" class="zen" style="width: 70px;">สิทธิ์บุคลากร</th>
            <th scope="col" class="zen" style="width: 70px;">สิทธิ์นักศึกษา</th>
            <th scope="col" class="zen" style="width: 120px;">วันที่เพิ่ม</th>
            <th scope="col" class="zen" style="width: 120px;">วันที่แก้ไข</th>
            <!-- <th scope="col" >วันที่ลบ</th> -->
            <th scope="col" class="zen" style="width: 115px;">การจัดการ</th>
        </tr>
    </table>
</div>
<div style="display: flex;justify-content: center;">
    <!--ส่วนตารางเเสดงข้อมูล-->
    <div style=" width:1400px; height: 460px; overflow-y: scroll;">

        <table class="table center table-hover">
            <tbody>
                <?php 
		
                while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                
             

                <tr>

                    <td scope="row" class="zen" style="width: 140px;"><?=$row['ItemID']?></td>
                    <td scope="row" class="zen" style="width: 210px;"><?=$row['ItemName']?></td>
                    <td scope="row" class="zen" style="width: 140px;"><?=$row['Detail']?></td>
                    <td scope="row" class="zen" style="width: 120px;"><?=$row['TypeName']?></td>
                    <td scope="row" class="zen tcenter" style="width: 70px;"><?=$row['StatusName']?></td>
                    <td scope="row" class="zen tcenter" style="width: 80px;"><?=$row['Building']?></td>
                    <td scope="row" class="zen" style="width: 100px;"><?=$row['Price']?></td>
                    <td scope="row" class="zen" style="width: 75px;"><?=$row['TeacherRight']?></td>
                    <td scope="row" class="zen" style="width: 75px;"><?=$row['StaffRight']?></td>
                    <td scope="row" class="zen" style="width: 75px;"><?=$row['StudentRight']?></td>
                    <td scope="row" class="zen" style="width: 120px;"><?=$row['Add_Date']?></td>
                    <td scope="row" class="zen" style="width: 120px;"><?=$row['Edit_Date']?></td>

                    <td scope="row" class="zen" style="width: 100px;">
                        <a href='editform.php?ItemID=<?php echo $row['ItemID'] ?>&&IDs=<?php echo $row['IDs'] ?> '><button
                                type="button" class="btn btn-success" style="width: 70px">แก้ไข</button></a>
                        <a href='FuncDelete.php?ItemID=<?php echo $row['ItemID'] ?> '
                            onclick="return confirm('คุณต้องการลบครุภัณฑ์นี้ใช่หรือไม่!!!')"><button name="delete"
                                type="submit" class="btn btn-danger mb-2" style="width: 70px">ลบ</button>
                    </td>
                </tr>
                <?php  }   ?>
            </tbody>
        </table>

    </div>
</div>




<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->