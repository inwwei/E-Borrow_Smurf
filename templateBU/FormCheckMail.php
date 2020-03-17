<?php 
session_start();
    if(isset($_SESSION['userName'])){

    }else{
        header("location:index.php");
    }
?>
<?php include "HeadAdmin.php"?>


<!-------------------- เชื่อมฐานข้อมูล ---------------------------->

<?php
if(($_GET['IDs']== NULL)){
    
    header("location:Maintain.php");
}else{
   
    $IDsit = $_GET['IDs'];
}

?>

<div class="tcenter">
    <img src="logo/logo_borrow.png" width="240px" />
</div>
<div>
    <h2 class="tcenter newfont">ตรวจสอบบัญชีผู้ใช้</h2>
</div><br>

<!--------------------Form รับข้อมูล---------------------------->

<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-2 "></div>
<div class="col-sm-1 "></div>

    <div class="col-sm-2 ">
        <div class="container linecerv tcenter">&nbsp;

            <form  method="POST" action="processMail.php">
                <strong><label for="email2">E-mail</label></strong>
                <input type="mail" name="mail" class="form-control mb-2 mr-sm-2 " required>
                <a href='Maintain.php'><button type="button" name="back" class="btn btn-secondary"
                        style="width: 100px">ย้อนกลับ</button></a>
                        <?php 
                        $_SESSION['IDs'] = $IDsit;
                        ?>
                <button type="submit" class="btn btn-success"style="width: 100px">ตรวจสอบ</button>
                &nbsp;
            </form>
            &nbsp;
            
            <?php
           $message= $_GET['message'];
            if (!empty($message)): ?>
            <div class="alert alert-danger">
                <?php echo $message ?>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>

    <!--------------------Footer---------------------------->
    <?php include "foottest.php"?>
    <!--------------------Footer---------------------------->