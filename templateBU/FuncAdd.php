<?php

$con= mysqli_connect("10.199.66.227","20S2_g4","Dwg7Q6UQ","20s2_g4") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
    
    $TypeID = $_POST["TypeID"];
    $ItemID = $_POST["ItemID"];
    $ItemName = $_POST["ItemName"];
    $Detail = $_POST["Detail"];
    $Price = $_POST["Price"];
    $Building = $_POST["Building"];
    $TeacherRight = $_POST["TeacherRight"];
    $StaffRight = $_POST["StaffRight"];
    $StudentRight = $_POST["StudentRight"];
    $Status = $_POST["Statusref"];
    $AddDate = $_POST["Add_Date"];
    

	$check = "
	SELECT  ItemID 
	FROM item  
	WHERE ItemID = '$ItemID' 
	";
    $result1 = mysqli_query($con, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert('เพิ่มรายการครุภัณฑ์ ไม่สำเร็จ รหัสครุภัณฑ์ ซ้ำ');";
    echo "window.history.back();";
    echo "</script>";
    }else{        
	$sql = "INSERT INTO item (TypeID, ItemID, ItemName, Detail, Price, Building, TeacherRight, StaffRight, StudentRight, Statusref, Add_Date)
    VALUES ('$TypeID', '$ItemID', '$ItemName', '$Detail', '$Price', '$Building', '$TeacherRight', '$StaffRight', '$StudentRight', '$Status', '$AddDate')";
	$result = mysqli_query($con, $sql); //or die("Error in query: $sql " . mysqli_error());
}
mysqli_close($con);
	if($result){
    echo "<script type='text/javascript'>";
    echo "window.location = 'Maintain.php'; ";
	echo "alert('เพิ่มรายการครุภัณฑ์ สำเร็จ');";
	echo "</script>";
	}else{
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มรายการครุภัณฑ์ ไม่สำเร็จ กรุณาใส่ข้อมูลให้ครบ');";
    echo "window.history.back();";
	echo "</script>";
}
?>