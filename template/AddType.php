<?php
$con= mysqli_connect("localhost","root","","20S2_g4") or die("Error: " . mysqli_error($con));
// $con= mysqli_connect("10.199.66.227","20S2_g4","Dwg7Q6UQ","20s2_g4") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
    
    $TypeName = $_POST["TypeName"];
    
	$sql = "INSERT INTO type (TypeName) VALUES ('$TypeName')";
	$result = mysqli_query($con, $sql); //or die("Error in query: $sql " . mysqli_error());

mysqli_close($con);
	if($result){
    echo "<script type='text/javascript'>";
    echo "window.location = 'TypeItem.php'; ";
	echo "alert('เพิ่มประเภทครุภัณฑ์ สำเร็จ');";
	echo "</script>";
	}else{
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มประเภทครุภัณฑ์ ไม่สำเร็จ กรุณาใส่ข้อมูลให้ครบ');";
    echo "window.history.back();";
	echo "</script>";
}
?>