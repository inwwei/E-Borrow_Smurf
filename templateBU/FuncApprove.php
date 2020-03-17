<meta charset="UTF-8">
<?php
//เชื่อมต่อ database: 
// $con= mysqli_connect("localhost","root","","20s2_g4") or die("Error: " . mysqli_error($con));
$con= mysqli_connect("10.199.66.227","20S2_g4","Dwg7Q6UQ","20s2_g4") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');

//สร้างตัวแปรสำหรับรับค่า status จากไฟล์แสดงข้อมูล
$itemID = $_GET["itemID"];
//$IDs = $_GET["ID"] ;
$Status_ref = $_GET['Statusref'];
$statuswork = $_GET['statuswork'];




//อัพเดทข้อมูลลง database ตาม ID ที่ส่งมา
$sql = "UPDATE borrowtransection SET Statusref = '3',
                statuswork = 'อนุมัติ'
        WHERE itemID ='$itemID' ";
$result = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());
$sql1 = "UPDATE item SET Statusref = '3'  
        WHERE IDs ='$itemID' ";
$result = mysqli_query($con,$sql1) or die ("Error in query: $sql " . mysqli_error());
    

//แสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'ShowApprove.php'; ";
  echo "alert('อนุมัติคำร้อง สำเร็จ');";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "window.location = 'Request.php'; ";
  echo "alert('อนุมัติคำร้อง ไม่สำเร็จ');";
  echo "</script>";
}
?>
