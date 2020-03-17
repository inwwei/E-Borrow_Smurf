<!--------------------Header---------------------------->
<?php 
session_start();
    if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");
    }
?>
<?php include "headtest.php" ?>
<div class="container "><br>
<!--------------------Header---------------------------->
<?php
   
   
	$sql = "SELECT * FROM borrowtransection, item, useraccount 
            WHERE borrowtransection.itemID = item.IDs 
            AND borrowtransection.userID = useraccount.idus 
            AND useraccount.userID = $userID"   ;
    $query = mysqli_query($conn,$sql);


?>


    <div class="container">
        <div class="row newfont">
            <div class="col">
                <div>
                    <h2>&nbsp;ประวัติการยืมครุภัณฑ์</h2>
                </div>
            </div>
            <div class="row">

        <!--ส่วนตารางเเสดงข้อมูล-->

        <table class="table table-striped">
            <tr class="tcenter" style="background-color: #ff9999">
                <th scope="col" class="zen" >ลำดับ</th>
                <th scope="col" class="zen" >รหัสครุภัณฑ์</th>
                <th scope="col" class="zen">ขื่อครุภัณฑ์</th>
                <th scope="col" class="zen" >สถานะ</th>
                <th scope="col" class="zen" >วันที่ยืม</th>
                <th scope="col" class="zen" >กำหนดคืน</th>
                <th scope="col" class="zen" >เหตุผล</th>
            </tr>
           
            <tbody>
                <?php 
                $number = 1;
                $temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr >
                    <td class="zen tcenter" ><?=$number?></td>
                    <td class="zen tcenter" ><?=$row['ItemID']?></td>
                    <td class="zen tcenter"  ><?=$row['ItemName']?></td>
                    <td class="zen tcenter"><?=$row['statuswork']?></td>
                    <td class="zen tcenter" ><?=$row['request_Date']?></td>
                    <td class="zen tcenter"><?=$row['End_Date']?></td>
                    <td class="zen tcenter"><?=$row['reason']?></td>
                </tr>
                 <?php
                    $number++;
                    $temp++;
				}?>       
            </tbody>       
        </table>
    </div>
    <?php if ($temp == 0){
		echo  "<p> <font color=red font face='verdana' size='5pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไม่มีรายการคำขออนุมัติ</font> </p>";
			}else{
                 echo  "<p> <font color=black font face='verdana' size='5pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมทั้งหมด </font>
                        <font color=red font face='verdana' size='5pt'>$temp </font>
                        <font color=black font face='verdana' size='5pt'>รายการ</font> </p>";
                    } 
    ?>

    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->