
<?php
    $con= mysqli_connect("localhost","root","","20s2_g4") or die("Error: " . mysqli_error($con));
    //$con= mysqli_connect("10.199.66.227","20S2_g4","Dwg7Q6UQ","20s2_g4") or die("Error: " . mysqli_error($con));
    mysqli_query($con, "SET NAMES 'utf8' ");
    date_default_timezone_set('Asia/Bangkok');

    $ItemID = $_GET['IDs'];
    $userID = $_GET['userID'];
    $statusref = $_GET['status'];
    $reason = $_POST["reason"];
    $Start_Date = $_POST["Start_Date"];
    $End_Date = $_POST["End_Date"];
    
	$sqlin = "INSERT INTO borrowtransection (ItemID, userID, reason, Start_Date, End_Date, statusref )
    VALUES ('$ItemID', '$userID', '$reason', '$Start_Date', '$End_Date', '$statusref')";
    
	$result = mysqli_query($con, $sqlin);

    mysqli_close($con);

	    if($result){
            echo "<script type='text/javascript'>";
            echo "window.location = 'UIshowlist.php'; ";
	        echo "alert('ทำรายการยืมสำเร็จ กรุณารอการยืนยัน');";
	        echo "</script>";
	    }else{
            echo "<script type='text/javascript'>";
            echo "alert('ทำรายการไม่สำเร็จ กรุณาใส่ข้อมูลให้ครบ');";
            echo "window.history.back();";
            echo "</script>";
    
        }
   
?>