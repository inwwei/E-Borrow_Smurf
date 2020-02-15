
<?php include "controller.php" ?>
<?php include "header.php" ?>

<?php
$action = new Action();
$rows = $action->get_item();
?>
        <div class="container">
            <hr>
            <h2>รายการอุปกรณ์</h2>
            <hr>
            <?php foreach($rows as $row){ ?>

                    <div>
                        <p>ID : <?=$row['Id']?></p>
                        <p>ชื่อ : <?=$row['Name']?></p>
                        <p>ชนิด : <?=$row['TypeId']?></p>
                        <!-- <p>รูป : <?=$row['img']?></p> -->
                        <p>ราคา : <?=$row['Price']?></p>
                    </div>
            <?php } ?>
            <div style="clear: both"></div>
            <hr>
        </div>
<?php include "footer.php"?>