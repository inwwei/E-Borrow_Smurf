<?php 
session_start();

if(isset($_SESSION['userName'])){

}else{
  header("location:index.php");

}
?>
<?php include "headtest.php"?>
<br>

<div class="tcenter">
    <img src="logo/logo_maintain.png" width="250px" />
</div>
<div>
    <h2 class="tcenter newfont">แก้ไขข้อมูลรายการครุภัณฑ์</h2>
</div><br>

<script type="text/javascript">
function fncSubmit() {

    if (document.getElementById('ItemID').value == "") {
        alert('กรุณากรอกรหัสครุภัณฑ์');
        return false;
    }
    if (document.getElementById('TypeID').value == "") {
        alert('กรุณาเลือกประเภทของครุภัณฑ์');
        return false;
    }
    if (document.getElementById('ItemName').value == "") {
        alert('กรุณากรอกชื่อครุภัณฑ์');
        return false;
    }

    if (document.getElementById('Price').value == "") {
        alert('กรุณากรอกราคาครุภัณฑ์');
        return false;
    }
    if (document.getElementById('TeacherRight').value == "") {
        alert('กรุณาเลือกสถานะสิทธิ์สำหรับอาจารย์');
        return false;
    }
    if (document.getElementById('StaffRight').value == "") {
        alert('กรุณาเลือกสถานะสิทธิ์บุคคลากร');
        return false;
    }
    if (document.getElementById('StudentRight').value == "") {
        alert('กรุณาเลือกสถานะสิทธิ์สำหรับนักศึกษา');
        return false;
    }
    if (document.getElementById('Status').value == "") {
        alert('กรุณาเลือกสถานะของครุภัณฑ์');
        return false;
    }


}
</script>

<?php

	// $serverName = "10.199.66.227";
	// $userName = "20S2_g4";
	// $userPassword = "Dwg7Q6UQ";
	// $dbName = "20s2_g4";

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "20s2_g4";



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

<div class="container linecerv">
    <div>
        <div></div><br>
        <div>

            <?php if (!empty($message)): ?>
            <div class="alert alert-success">
                <?php echo $message ?>
            </div>
            <?php endif;?>


            <form class="form-horizontal" method="POST" onSubmit="JavaScript:return fncSubmit();">

                <details style="font-size: 20px">
                    <summary class="tcenter newfont"><strong>กรอกข้อมูลเกี่ยวกับครุภัณฑ์</strong></summary>&nbsp;
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    <label for="email2"> ประเภทครุภัณฑ์:</label>
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

                                <div class="col-6">
                                    <label for="email2"> รหัสครุภัณฑ์</label>
                                    <input type="int" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['ItemID']; ?>" name="ItemID" id="ItemID"
                                        pattern="[0-9]{13}">
                                </div>

                                <div class="col-6">
                                    <label for="email2">ชื่อครุภัณฑ์</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['ItemName']; ?>" id="ItemName" name="ItemName">
                                </div>

                                <div class="col-6">
                                    <label for="email2">ตำแหน่งของครุภัณฑ์</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['Building']; ?>" id="Building" name="Building">
                                </div>

                                <div class="col-6">
                                    <label for="email2">ราคาครุภัณฑ์</label>
                                    <input type="int" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['Price']; ?>" id="Price" name="Price">
                                </div>

                                <div class="col-6">
                                    <label for="email2">รายละเอียดครุภัณฑ์</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['Detail']; ?>" id="Detail" name="Detail">



                                </div>

                                <div class="row">
                                <div class="col-12">

                                        <label for="email2">สถานะครุภัณฑ์</label>
                                        <select class="form-control mb-2 mr-sm-2" id="Status" name="Status">
                                            
                                                    <?php
                                                    $ItemID = $_GET['ItemID'];
                                                    $res2 = mysqli_query($conn, "SELECT * FROM  item , status WHERE ItemID.Statusref =  $ItemID.IDst");
                                                    $resall = mysqli_query($conn, "SELECT * FROM  status ");


                                            while ($row2 = mysqli_fetch_array($res2)) {
                                                echo "<option value=" . $row2['Statusref'] . ">" . $row2['Statusref'] . "</option>";
                                                
                                            }?>
                                            <?php  while ($rowall = mysqli_fetch_array($res2)) {
                                                    echo "<option value=" . $row2['IDst'] . ">" . $row2['StatusName'] . "</option>";

                                                }?>
                                               
                                            </select>
                                            <!-- <label for="email2" >สถานะ</label>
                                            <input type="text" class="form-control mb-2 mr-sm-2"  name="Detail"> -->

                                        </div>


                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </details>
                <hr>

                <details style="font-size: 20px">

                    <summary class="tcenter newfont"><strong>กำหนดสิทธิ์การยืมครุภัณฑ์</strong></summary>&nbsp;
                    <!-- ***************************************************************************************** -->

                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">

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

                        </div>
                        <div class="col-3"></div>
                    </div>

                </details>
        </div>

        <hr>

        <div class="row newfont">
            <div class="col-4"></div>
            <div class="col-4 tcenter">
                <a href='Maintain.php'><button type="button" name="back" class="btn btn-secondary" style="width: 100px">ย้อนกลับ</button></a>
                <button type="submit" class="btn btn-success" name="btnsuccess" style="width: 100px">ยืนยัน</button>
            </div>
            <div class="col-4"></div>
        </div>
        <br>
        </form>


    </div>



</div>
<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->