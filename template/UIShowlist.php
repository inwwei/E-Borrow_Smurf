<!--------------------Header---------------------------->
<?php include "headtest.php" ?>
<div class="container"><br>

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

    <div class="page-content">
        <img src="image/Untitled-2.jpg" />
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <h2>&nbsp;รายการอุปกรณ์</h2>
                </div>
            </div>
            <div class="col">
                <!--ส่วนบอกสถานะว่าง-ไม่ว่าง-->

                <form class="form-inline" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                   
                        <h6>สถานะอุปกรณ์ :</h6>&nbsp;&nbsp;
                        <select class="custom-select d-block " id="txtKeyword" name="txtKeyword">
                            <option value="">รายการทั้งหมด</option>
                            <option value="Available">ว่าง</option>
                            <option value="Busy">ไม่ว่าง</option>
                        </select>&nbsp;&nbsp;
                    


                    <!--ส่วนค้นหารายการ-->
                    
                        <input class="form-control " name="sechKeyword" type="text" id="sechKeyword"
                            placeholder="กรอกชื่ออุปกรณ์ที่จะค้นหา" value="">&nbsp;&nbsp;
                        <button type="submit" class="btn btn-secondary my-1" id="search">ค้นหา</button>
                    

                </form><br>
            </div>
        </div>
        <!--ส่วนตารางเเสดงข้อมูล-->


        <table class="table container yellow tcenter ">
            <tr >
                <th scope="col" class="zen th1">รหัสอุปกรณ์</th>
                <th scope="col" class="zen th2">รายละเอียด</th>
                <th scope="col" class="zen th3">รูป</th>
                <th scope="col" class="zen th4">สถานะ</th>
                <th scope="col" class="zen">การยืม</th>
            </tr>
        </table>
        <div style=" height: 500px; overflow-y: scroll;">
            <table class="table table-hover container mb-5">
                <?php 
				$temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>
                    <th scope="row" class="th1"><?=$row['itemid']?></th>
                    <td class="th2"> <?=$row['Name']?></td>
                    <td class="th3 tcenter"><img src="image/<?=$row['img'];?>" width="100" height="100"></td>
                    <td class="th4 tcenter"><?=$row['Status']?></td>
                    <td class="tcenter"><button name="lent" type="submit" class="btn btn-secondary mb-2">ยืม</button>
                </tr>
                <?php
				$temp++;
				}?>
                <?php if ($temp == 0){
					echo  "<p> <font color=red font face='verdana' size='5pt'>ไม่มีรายการอุปกรณ์ที่ค้นหา</font> </p>";
				} ?>

            </table>
        </div>

        <?php
mysqli_close($conn);
?>
    </div>
    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->