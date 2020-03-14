<!--------------------Header---------------------------->
<?php include "headtest.php" ?>
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

	// $serverName = "10.199.66.227";
	// $userName = "20S2_g4";
	// $userPassword = "Dwg7Q6UQ";
	// $dbName = "20S2_g4";

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "20S2_g4";

	$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
	mysqli_set_charset($conn, "utf8");

	$IDs = $_GET['IDs'];
	if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM type WHERE ID = '$ID'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res);
    }
    if (isset($_POST['ID'])) {
	
        $ID = $_REQUEST['ID'];
        $TypeName = $_REQUEST['TypeName'];
        
        $sql = "UPDATE type SET TypeName='$TypeName' WHERE IDs =$IDs";
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

<?php
//    $serverName = "localhost";
//    $userName = "root";
//    $userPassword = "";

   $serverName = "10.199.66.227";
   $userName = "20S2_g4";
   $userPassword = "Dwg7Q6UQ";
   $dbName = "20S2_g4";
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn, "utf8");
	$sql = "SELECT * FROM type"   ;
	$query = mysqli_query($conn,$sql);
?>
<!--------------------Footer---------------------------->
<?php include "foottest.php"?>
<!--------------------Footer---------------------------->