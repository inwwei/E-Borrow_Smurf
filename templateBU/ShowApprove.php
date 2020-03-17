

<!--------------------Header---------------------------->
<?php 
    session_start();
      if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");

    }
?>
<?php include "HeadAdmin.php" ?>

<div class="container"><br>
        <div class="row newfont">
            <div class="col">
                <h2 class="my-3">รายการที่อนุมัติเเล้ว</h2>
            </div>
            <form class="form-inline" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                <div class="col-12"> 
                    ค้นหาจากวันที่อนุมัติ :&nbsp;<input type="date" id="dateKeyword" name="dateKeyword" class="form-control mb-2 mr-sm-2">
                    <button type="submit" class="btn btn-secondary my-1"id="search">ค้นหา</button>
                </div>          
            </form><br>
            </div>
        </div>
        <br>

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	date_default_timezone_set("Asia/Bangkok");
	$dateKeyword = null;

	if(isset($_POST["dateKeyword"]))
	{
		$dateKeyword = $_POST["dateKeyword"];
	}
?>
        


<div style="display: flex;justify-content: center;">
    <table class="table table-striped" style="width: 1400px">
        <tr style="background-color: #ff9999">
            <th scope="col" class="zen" style="width: 140px;">รหัสครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 210px;">ชื่อครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 140px;">รายละเอียดครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 170px;">รายละเอียดผู้ยืม</th>
            <th scope="col" class="zen" style="width: 60px;">เหตุผล</th>
            <th scope="col" class="zen" style="width: 60px;">สถานะอุปกรณ์</th>
            <th scope="col" class="zen" style="width: 60px;">วันที่อนุมัติ</th>
            
            <!-- <th scope="col" >ปุ่ม</th> 
            <th scope="col" class="zen" style="width: 115px;">การจัดการ</th>
            -->
        </tr>
    </table>
</div>
<div style="display: flex;justify-content: center;">
    <!--ส่วนตารางเเสดงข้อมูล-->
    <div style=" width:1400px; height: 460px; overflow-y: scroll;">
        
        <table class="table center table-hover">

            <tbody>
                <?php
                
                 $serverName = "10.199.66.227";
                 $userName = "20S2_g4";
                 $userPassword = "Dwg7Q6UQ";

                $dbName = "20S2_g4";
                $con =  mysqli_connect($serverName,$userName,$userPassword,$dbName);
                mysqli_set_charset($con, "utf8");
                $sql = "SELECT * FROM borrowtransection , item , useraccount ,status 
                where borrowtransection.itemID = item.IDs 
                AND borrowtransection.userID = useraccount.idus 
                AND statuswork LIKE '%อนุมัติ%' AND borrowtransection.Statusref = status.IDst AND request_Date LIKE '%".$dateKeyword."%'";
                $query = mysqli_query($con,$sql);

                ?>
                <?php 
                $temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>

                    <td scope="row" class="zen" style="width: 200px;"><?=$row['ItemID']?></td>
                    <td scope="row" class="zen" style="width: 280px;"><?=$row['ItemName']?></td>
                    <td scope="row" class="zen" style="width: 180px;"><?=$row['Detail']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['userID']?>&nbsp;<?=$row['firstName']?>&nbsp;<?=$row['lastName']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['reason']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['StatusName']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['request_Date']?></td>
                    
                   
                </tr>
                <?php  
                $temp++;
                }?>
            </tbody>
            
        </table> 
        <?php if ($temp == 0){
		echo  "<p> <font color=red font face='verdana' size='5pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไม่มีรายการคำขออนุมัติ</font> </p>";
			}else{
                 echo  "<p> <font color=black font face='verdana' size='5pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมทั้งหมด </font>
                        <font color=red font face='verdana' size='5pt'>$temp </font>
                        <font color=black font face='verdana' size='5pt'>รายการ</font> </p>";
                    } 
    ?>
    </div>
</div>
   


<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->






