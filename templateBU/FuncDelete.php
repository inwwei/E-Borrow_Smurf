<meta charset="UTF-8">
<?php
//เชื่อมต่อ database: 
// $con= mysqli_connect("localhost","root","","20s2_g4") or die("Error: " . mysqli_error($con));
$con= mysqli_connect("10.199.66.227","20S2_g4","Dwg7Q6UQ","20s2_g4") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');

//สร้างตัวแปรสำหรับรับค่า ItemId จากไฟล์แสดงข้อมูล
$item_id = $_REQUEST["ItemID"];

//ลบข้อมูลออกจาก database ตาม ID ที่ส่งมา
$sql = "DELETE FROM item WHERE ItemID='$item_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//แสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'maintain.php'; ";
  echo "alert('ลบรายการครุภัณฑ์ สำเร็จ');";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบรายการครุภัณฑ์ ไม่สำเร็จ');";
  echo "</script>";
}
?>