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
	$sql = "SELECT item.ID,item.ItemID,item.ItemName,type.TypeName,item.Status,item.Building FROM item , type where item.TypeID = type.ID AND ItemName LIKE '%".$secKeyword."%'AND Status LIKE '%".$strKeyword."%'"  ;
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
                        <option value="ปกติ">ปกติ</option>
                        <option value="Busy">ไม่ปกติ(แก้เอา)</option>
                    </select>&nbsp;&nbsp;



                    <!--ส่วนค้นหารายการ-->

                    <input class="form-control " name="sechKeyword" type="text" id="sechKeyword"
                        placeholder="กรอกชื่ออุปกรณ์ที่จะค้นหา" value="">&nbsp;&nbsp;
                    <button type="submit" class="btn btn-secondary my-1" id="search">ค้นหา</button>


                </form><br>
            </div>
        </div>
        <!--ส่วนตารางเเสดงข้อมูล-->


        <table class="table container yellow tcenter">
            <tr>
                <th scope="col" class="zen" style="width: 20px;">ลำดับ</th>
                <th scope="col" class="zen" style="width: 130px;">รหัสอุปกรณ์</th>
                <th scope="col" class="zen" style="width: 290px;">รายละเอียด</th>
                <th scope="col" class="zen" style="width: 150px;">ประเภท</th>
                <th scope="col" class="zen" style="width: 85px;">สถานะ</th>
                <th scope="col" class="zen" style="width: 105px;">ตำแหน่ง</th>
                <th scope="col" class="zen" style="width: 100px;"></th>
            </tr>
        </table> 
        
               

        <div style=" height: 500px; overflow-y: scroll;">
            <table class="table table-hover container mb-5 tcenter">

            <?php 
				$temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>
                <td  class="zen " style="width: 65px;"><?=$row['ID']?></td>
                <td  class="zen " style="width: 135px;"><?=$row['ItemID']?></td>
                <td  class="zen " style="width: 310px;"><?=$row['ItemName']?></td>
                <td  class="zen " style="width: 160px;"><?=$row['TypeName']?></td>
                <td  class="zen " style="width: 90px;"><?=$row['Status']?></td>
                <td  class="zen "style="width: 110px;"><?=$row['Building']?></td>
                <td scope="row" class="zen " style="width: 90px;"><button name="lent" type="submit"
                            class="btn btn-secondary mb-2">ยืม</button>
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