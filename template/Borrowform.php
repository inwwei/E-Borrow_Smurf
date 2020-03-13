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
    <img src="logo/logo_borrow.png" width="240px" />
</div>
<div>
    <h2 class="tcenter newfont">ข้อมูลการยืมครุภัณฑ์</h2>
</div><br>

<!-------------------- เชื่อมฐานข้อมูล ---------------------------->

<?php
    date_default_timezone_set("Asia/Bangkok");
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

	

    $ItemID = $_GET['ItemID'];
    $sql = "SELECT * FROM item WHERE ItemID = '$ItemID'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);


    $userID = $_GET['userID'];
    $sqlus = "SELECT * FROM useraccount WHERE userName = '$userID'";
    $us = mysqli_query($conn, $sqlus);
    $usID = mysqli_fetch_array($us);

    $ref = $_GET['status'];
    $sqlst = "SELECT * FROM status WHERE IDst = '$ref'";
    $st = mysqli_query($conn, $sqlst);
    $stref = mysqli_fetch_array($st);

    
    
	if (isset($_POST['ItemID'])) {

    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $UserID = $_REQUEST['UserID'];
    $tel = $_REQUEST['tel'];    
    $mail = $_REQUEST['mail'];  
    $reason = $_REQUEST['reason'];  
	
    $ItemID = $_REQUEST['ItemID'];
    $ItemName = $_REQUEST['ItemName'];
    $Statusref = $_REQUEST['Statusref']; 
    $Detail = $_REQUEST['Detail'];
    $Building = $_REQUEST['Building'];
   
	
	$result = mysqli_query($conn, $sql);
	
	}
?>

<!--------------------Form รับข้อมูล---------------------------->

<div class="container linecerv">
    <div>
        <div></div><br>
        <div>

            <?php if (!empty($message)): ?>
            <div class="alert alert-success">
                <?php echo $message ?>
            </div>
            <?php endif;?>

            <form class="form-horizontal" method="POST" onSubmit="fncSubmit()"
                action='FuncBorrow.php?ItemID=<?php echo $row['ItemID'] ?>&&IDs=<?php echo $row['IDs'] ?>&&userID=<?php echo $usID['idus'] ?>&&status=<?php echo $stref['IDst'] ?> '>

                <details style="font-size: 20px">

                    <summary class="tcenter newfont"><strong>กรอกข้อมูลผู้ยืม</strong></summary>&nbsp;
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    <label for="email2"> ชื่อ</label>
                                    <input type="text" name="firstName" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $usID['firstName']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email2"> นามสกุล</label>
                                    <input type="text" name="lastName" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $usID['lastName']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email2">รหัสนักศึกษา</label>
                                    <input type="text" name="userID" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $usID['userID']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email2">เบอร์โทรศัพท์</label>
                                    <input type="text" name="tel" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $usID['tel']; ?>" pattern="\d{3}[\-]\d{7}" title = "ex. 080-1234567" readonly>
                                </div>

                                <div class="col-12">
                                    <label for="email2">อีเมล</label>
                                    <input type="email" name="mail" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $usID['mail']; ?>" readonly>
                                </div>

                                <div class="col-12">
                                    <label for="email2">เหตุผลการยืม</label>
                                    <textarea  name="reason" class="form-control"  required></textarea>
                                </div>


                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </details>
                <br>

                <details style="font-size: 20px">
                    <summary class="tcenter newfont"><strong>รายละเอียดครุภัณฑ์</strong></summary>&nbsp;
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    <label for="email2">ชื่อครุภัณฑ์</label>
                                    <input type="text" name="ItemName" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['ItemName']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email2">รหัสครุภัณฑ์</label>
                                    <input type="text" name="ItemID" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['ItemID']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email2">รายละเอียดครุภัณฑ์</label>
                                    <input type="text" name="Detail" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['Detail']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email2">ตำแหน่งครุภัณฑ์</label>
                                    <input type="text" name="Building" class="form-control mb-2 mr-sm-2"
                                        value="<?php echo $row['Building']; ?>" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="AddDate">วันที่ยืม</label>
                                    <input type="text" name="date" id="date" value="<?=date('m/d/Y h:i A')?>" class="form-control mb-2 mr-sm-2" readonly>

                                </div>

                                <div class="col-6">
                                    <label for="AddDate">วันที่คืน</label>
                                    <input type="datetime-local" id="birthdaytime" name="End_Date"
                                        class="form-control mb-2 mr-sm-2" required>

                                </div>

                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </details>
                <br>
        </div>

        <div class="row newfont">
            <div class="col-4"></div>
            <div class="col-4 tcenter">
                <a href='Maintain.php'><button type="button" name="back" class="btn btn-secondary"
                        style="width: 100px">ย้อนกลับ</button></a>
                <input type="submit" class="btn btn-success" name="btnsuccess" style="width: 100px" value="ยืนยัน">
                <div class="col-4"></div>
            </div>
            <br>
            

        </div>

    </div>
    </form><br>
</div>
    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->