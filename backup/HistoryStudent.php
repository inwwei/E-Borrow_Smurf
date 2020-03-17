<!--------------------Header---------------------------->
<?php include "headtest.php" ?>
<div class="container "><br>
<!--------------------Header---------------------------->
<?php
//    $serverName = "localhost";
//    $userName = "root";
//    $userPassword = "";
    session_start();
    $serverName = "10.199.66.227";
    $userName = "20S2_g4";
    $userPassword = "Dwg7Q6UQ";
    $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn, "utf8");
	$sql = "SELECT item.ItemID,item.ItemName,useraccount.userID,statuswork,request_Date,Start_Date,End_Date FROM borrowtransection, item, useraccount WHERE borrowtransection.itemID = item.IDs AND borrowtransection.userID = useraccount.idus "   ;
	$query = mysqli_query($conn,$sql);


?>
    <div class="page-content">
        <img src="image/Untitled-2.jpg" />
    </div><br>

    <div class="container">
        <div class="row newfont">
            <div class="col">
                <div>
                    <h2>&nbsp;ประวัติการยืมครุภัณฑ์</h2>
                </div>
            </div>
            <div class="row">

        <!--ส่วนตารางเเสดงข้อมูล-->

        <table class="table container newfont">
            <tr style="background-color: #ff9999">
                <th scope="col" class="zen" >ลำดับ</th>
                <th scope="col" class="zen" >รหัสครุภัณฑ์</th>
                <th scope="col" class="zen">ขื่อครุภัณฑ์</th>
                <th scope="col" class="zen" >สถานะ</th>
                <th scope="col" class="zen" >วันที่ส่งคำขอ</th>
                <th scope="col" class="zen" >วันที่ยืม</th>
                <th scope="col" class="zen" >วันที่คืน</th>
            </tr>
           
            <tbody>
                <?php 
                $number = 1;
			
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>
                    <td class="zen tcenter" ><?=$number?></td>
                    <td class="zen tcenter" ><?=$row['ItemID']?></td>
                    <td class="zen tcenter"  ><?=$row['ItemName']?></td>
                    <td class="zen tcenter"><?=$row['statuswork']?></td>
                    <td class="zen tcenter" ><?=$row['request_Date']?></td>
                    <td class="zen tcenter" ><?=$row['Start_Date']?></td>
                    <td class="zen tcenter"><?=$row['End_Date']?></td>
                </tr>
                 <?php
                    $number++;
				}?>       
            </tbody>       
        </table>
    </div>
    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->