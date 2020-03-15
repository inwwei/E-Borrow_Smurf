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
	$serverName = "10.199.66.227";
	$userName = "20S2_g4";
	$userPassword = "Dwg7Q6UQ";
	$dbName = "20s2_g4";

	// $serverName = "localhost";
	// $userName = "root";
	// $userPassword = "";
	// $dbName = "20s2_g4";



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
 
            <form class="form-horizontal" method="POST">

               
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6 tcenter">
                                    <strong><label for="email2">E-mail</label></strong>
                                    <input type="mail" name="mail" class="form-control mb-2 mr-sm-2 ">
                                </div>
                                <div class="row newfont">
                                    <?php $_SESSION['$IDs'] = $IDs; ?>
                                        <div class="col-12"><a href="processMail.php">ตรวจสอบ</a></div>
                            <br></div>
                                   
                            </div>
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