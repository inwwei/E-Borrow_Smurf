

<!--------------------Header---------------------------->
<?php include "headtest.php" ?>

<div class="container"><br>
        <div class="row newfont">
            <div class="col">
                <h2 class="my-3">รายการที่อนุมัติเเล้ว</h2>
            </div>
                <a href='Request.php'><button name="Show" type="submit" class="btn btn-success my-4" 
                    style="width: 120px;float:right">รายการรออนุมัติ</button></a>
            </div>
        </div>
        <br>




<div style="display: flex;justify-content: center;">
    <table class="table center tcenter newfont" style="width: 1400px">
        <tr style="background-color: #ff9999">
            <th scope="col" class="zen" style="width: 140px;">รหัสครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 210px;">ชื่อครุภัณฑ์</th>
            <th scope="col" class="zen" style="width: 140px;">รายละเอียด</th>
            <th scope="col" class="zen" style="width: 140px;">รหัสนักศึกษา</th>
            <th scope="col" class="zen" style="width: 140px;">ชื่อนักศึกษา</th>
            <th scope="col" class="zen" style="width: 60px;">สถานะการทำงาน</th>
            <th scope="col" class="zen" style="width: 60px;">สถานะอุปกรณ์</th>
            
            <!-- <th scope="col" >ปุ่ม</th> 
            <th scope="col" class="zen" style="width: 115px;">การจัดการ</th>
            -->
        </tr>
    </table>
</div>
<div style="display: flex;justify-content: center;">
    <!--ส่วนตารางเเสดงข้อมูล-->
    <div style=" width:1400px; height: 460px; overflow-y: scroll;">
        
        <table class="table center table-hover">

            <tbody>
                <?php
                
                $serverName = "10.199.66.227";
                $userName = "20S2_g4";
                $userPassword = "Dwg7Q6UQ";

                // $serverName = "localhost";
                // $userName = "root";
                // $userPassword = "";

                $dbName = "20S2_g4";
                $conn =  mysqli_connect($serverName,$userName,$userPassword,$dbName);
                mysqli_set_charset($conn, "utf8");
                $sql = "SELECT * FROM borrowtransection , item , useraccount ,status where borrowtransection.itemID = item.IDs AND borrowtransection.userID = useraccount.idus AND statuswork LIKE '%อนุมัติ%' AND borrowtransection.Statusref = status.IDst";
                $query = mysqli_query($conn,$sql);
              
                ?>
                <?php 
                $temp=0;
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                <tr>

                    <td scope="row" class="zen" style="width: 150px;"><?=$row['ItemID']?></td>
                    <td scope="row" class="zen" style="width: 240px;"><?=$row['ItemName']?></td>
                    <td scope="row" class="zen" style="width: 180px;"><?=$row['Detail']?></td>
                    <td scope="row" class="zen" style="width: 160px;"><?=$row['userID']?></td>
                    <td scope="row" class="zen" style="width: 140px;"><?=$row['firstName']?>&nbsp;&nbsp;<?=$row['lastName']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['statuswork']?></td>
                    <td scope="row" class="zen" style="width: 80px;"><?=$row['StatusName']?></td>
                    
                    <!--

                    <td scope="row" class="zen" style="width: 100px;">
                        <a href='FuncApprove.php?ID=<?php echo $row['ID'] ?> '
                            onclick="return confirm('คุณต้องการอนุมัติคำร้องนี้ใช่หรือไม่!!!')"><button name="delete"
                                type="submit" class="btn btn-success mb-2" style="width: 70px">อนุมัติ</button>
                        <a href='FuncNotApprove.php?ID=<?php echo $row['ID'] ?> '
                            onclick="return confirm('คุณต้องการปฏิเสธคำร้องนี้ใช่หรือไม่!!!')"><button name="delete"
                                type="submit" class="btn btn-danger mb-2" style="width: 70px">ไม่อนุมัติ</button>
                    </td>  

                    -->
                </tr>
                <?php  
                $temp++;
                }?>
            </tbody>
            
        </table>
                <?php if ($temp == 0){
					    echo  "<p> <font color=red font face='verdana' size='5pt'>ไม่มีรายการที่อนุมัติ</font> </p>";
				    }else{
                        echo  "<p> <font color=black font face='verdana' size='5pt'>รวมทั้งหมด </font>
                                   <font color=red font face='verdana' size='5pt'>$temp </font>
                                   <font color=black font face='verdana' size='5pt'>รายการ</font> </p>";
                    } 
                ?>
    </div>
    
</div>


<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->






