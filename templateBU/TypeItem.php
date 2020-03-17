<!--------------------Header---------------------------->
<?php 
    session_start();
      if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");

    }
?>
<?php include "HeadAdmin.php" ?>
<br>

<div>
    <h2 class="tcenter newfont">เพิ่มประเภทครุภัณฑ์</h2>
</div><br>

<!--------------------Form รับข้อมูล---------------------------->
<div class="container linecerv "style="width:800px">
      
            <hr>
            <!-- <h2 class="tcenter"> เพิ่มรายการครุภัณฑ์ </h2> -->
            <form name="addtype" action="AddType.php" method="POST" enctype="multipart/form-data"
                class="form-horizontal" >
                    <summary class="tcenter newfont"><strong>&nbsp;&nbsp;กรอกข้อมูลเกี่ยวกับครุภัณฑ์</strong></summary>
                    <br>

                        <div class="col-6">
                            <label for="email2">ชื่อประเภทครุภัณฑ์</label>
                                <input type="text" name="TypeName" class="form-control" required
                                        placeholder="ชื่อประเภทครุภัณฑ์" />
                        </div>
            <hr>

                <div class="row newfont">
                    <div class="col-4"></div>
                    <div class="col-4 tcenter">
                        <a href='Maintain.php'><button type="button" class="btn btn-secondary"
                                style="width: 100px">ย้อนกลับ</button></a>
                        <button type="submit" class="btn btn-success" name="btnadd" style="width: 100px"> เพิ่ม </button>
                    </div>
                    <div class="col-4"></div>
                </div>
                <br>
            </form>
</div>


</div>

<!--------------------Form รับข้อมูล---------------------------->

<?php


$serverName = "10.199.66.227";
$userName = "20S2_g4";
 $userPassword = "Dwg7Q6UQ";

    $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn, "utf8");
	$sql = "SELECT * FROM type"   ;
    $query = mysqli_query($conn,$sql);
    $cont = 1;
?>
    <div calss="">
        <table class="table newfont container " style="width:800px">
                <tr style="background-color: #ff9999">
                    <th scope="col" >ลำดับที่</th>
                    <th scope="col" >ชื่อประเภทครุภัณฑ์</th>
                    <th scope="col" >การจัดการ</th>
                </tr>
                <tbody>
                    <?php while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
                    <tr>
                        <td scope="row"><?= $cont ?></td>
                        <td scope="row"><?=$row['TypeName']?></td>
                        <td scope="row" >
                        <a href='EditTypeForm.php?ID=<?php echo $row['ID'] ?>'><button
                                type="button" class="btn btn-success" >แก้ไข</button></a>

                        <a href='DeleteType.php?ID=<?php echo $row['ID'] ?> '
                            onclick="return confirm('คุณต้องการลบครุภัณฑ์นี้ใช่หรือไม่!!!')"><button name="delete"
                                type="submit" class="btn btn-danger ">ลบ</button>

                    </td>
                    
                    
                    </tr>
                    <?php  $cont++; }   ?>
                </tbody>
        </table>
    </div>
<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->