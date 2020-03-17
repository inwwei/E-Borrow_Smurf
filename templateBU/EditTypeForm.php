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
    <h2 class="tcenter newfont">แก้ไขประเภทครุภัณฑ์</h2>
</div><br>

<script type="text/javascript">
function fncSubmit() {

    if (document.getElementById('TypeName').value == "") {
        alert('กรุณากรอกประเภทครุภัณฑ์ : Please enter a type item.');
        return false;
    }
}
</script>

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
<?php


	$ID = $_GET['ID'];
	if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM type WHERE ID = '$ID'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res);
    }
    if (isset($_POST['ID'])) {
	
        $ID = $_REQUEST['ID'];
        $TypeName = $_REQUEST['TypeName'];
        
        $sql = "UPDATE type SET TypeName='$TypeName' WHERE ID =$ID";
        $result = mysqli_query($conn, $sql);
        if($result){
                echo "<script type='text/javascript'>";
                echo "window.location = 'TypeItem.php'; ";
                echo "alert('แก้ไขประเภทครุภัณฑ์ สำเร็จ');";
                echo "</script>";
                }else{
                echo "<script type='text/javascript'>";
                echo "alert('แก้ไขประเภทครุภัณฑ์ ไม่สำเร็จ');";
                echo "window.history.back();";
                echo "</script>";
         
        }
    }
    
    ?>
        
<!--------------------Form รับข้อมูล---------------------------->
<div class="container linecerv ">
      
            <hr>
            <!-- <h2 class="tcenter"> เพิ่มรายการครุภัณฑ์ </h2> -->
            <form method="POST" onSubmit="JavaScript:return fncSubmit();"
                class="form-horizontal">
                    
                    <br>

                        <div class="col-6">
                            <label for="email2">รหัส : <?php echo $row['ID']; ?></label><br>
                            <label for="email2">ชื่อประเภทครุภัณฑ์:</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $row['TypeName']; ?>" id="TypeName" name="TypeName">
                            
                        </div>
            <hr>

                <div class="row newfont">
                    <div class="col-4"></div>
                    <div class="col-4 tcenter">
                        <a href='TypeItem.php'><button type="button" class="btn btn-secondary"
                                style="width: 100px">ย้อนกลับ</button></a>
                        <button type="submit" class="btn btn-success"  name="btnsuccess" style="width: 100px"> แก้ไข </button>
                    </div>
                    <div class="col-4"></div>
                </div>
                <br>
            </form>
</div>


</div>

<!--------------------Form รับข้อมูล---------------------------->

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
                        <a href='EditType.php?ID=<?php echo $row['ID'] ?>'><button
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