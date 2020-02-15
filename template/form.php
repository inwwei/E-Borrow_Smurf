<?php include "header.php"?>
<?php 
$action = new Action();
if(!$action->check_status($_GET["table"])){
    echo $action->link_page('/home.php');
}
//$customer = $action->get_customer(); 
//print_r
?>
    <div class="container">
        <div class="col-sm-12">
            <center>
                <div class="col-form">
                    <div class="tform">
                        <div class="form-input">
                            <form action="link.php" method="POST">
                            <div class="form-group">
                                <label >โต๊ะ</label>
                                <input type="text" class="form-control" name="table" value="<?=$_GET['table']?>" readonly required>
                            </div>
                            <div class="form-group">
                                <label >ชื่อผู้จอง</label>
                                <input type="text" class="form-control" value="<?=$_SESSION["cfname"]?>" name="name" readonly required>
                            </div>
                            <div class="form-group">
                                <label >เบอร์โทร</label>
                                <input type="text" class="form-control" name="tel" required>
                            </div>            
                            <button type="submit" class="btn btn-default" name="buy" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <br>
    <div class="container">       
            <center>
                <div class="col-form">         
                        <div class="form-input">
                            <div >
                                <h1 >*******คำเตือน******</h1>
                               <h3>1)สำหรับการจองแต่ละครั้ง หลังจากจองแล้วลูกค้าต้องมาถึงร้านภายใน 15 นาที</h3><br>
                               <h3>2)ถ้าไม่ทำตามเงื่อนไขข้อที่ 1 ถือว่าการจองเป็นอันยกเลิก</h3>
                            </div>                         
                    </div>
                </div>
            </center> 
    </div>
<?php include "footer.php"?>