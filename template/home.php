<?php include "header.php"?>
<div class="topnav">
   
    <div class="container-fluid" style="padding-left: 0;">
    <ul class="nav navbar-nav navbar-right">
    <a class="active" href="show.php">Log out</a>
    </ul>
  </div>
</div>
<?php
$rows = $action->tables();
?>
        <!--<table border=1>
            <?php foreach($rows as $row){ ?>
            <tr>
                <td><?=$row['tid']?></td>
                <td><?=$row['tstatus']?></td>
                <td><?=$row['zone']?></td>
                <td><?=$row['quantity']?></td>
            </tr>
            <?php } ?>
        </table>-->
        <div class="container">
            <hr>
            <h2>ZONE A</h2>
            <hr>
            <?php foreach($rows as $row){ ?>
            <?php if($row['zone']=='a'){ ?>
            <div class="col-sm-2 under">
                <?php
                    if($row['tstatus']=="เต็ม"){
                        $bg = "table-full";
                    }else{
                        $bg = "table-blank";
                    }
                ?>
                <div class="tform <?=$bg?>">
                    <div class="table-box">
                        <p>เลขโต๊ะ : <?=$row['tid']?></p>
                        <p>สถานะ : <?=$row['tstatus']?></p>
                        <p>จำนวนที่นั่ง : <?=$row['quantity']?></p>
                        <div class="text-center">
                            <?php if($row['tstatus']=="เต็ม"){ ?>
                                <button type="button" class="btn btn-default" disabled>เต็มแล้ว</button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-info"><a href="form.php?table=<?=$row['tid']?>">จอง</a></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
            <div style="clear: both"></div>
            <hr>
            <h2>ZONE B</h2>
            <hr>
            <?php foreach($rows as $row){ ?>
            <?php if($row['zone']=='b'){ ?>
            <div class="col-sm-2 under">
                <?php
                    if($row['tstatus']=="เต็ม"){
                        $bg = "table-full";
                    }else{
                        $bg = "table-blank";
                    }
                ?>
                <div class="tform <?=$bg?>">
                    <div class="table-box">
                        <p>เลขโต๊ะ : <?=$row['tid']?></p>
                        <p>สถานะ : <?=$row['tstatus']?></p>
                        <p>จำนวนที่นั่ง : <?=$row['quantity']?></p>
                        <div class="text-center">
                            <?php if($row['tstatus']=="เต็ม"){ ?>
                                <button type="button" class="btn btn-default" disabled>เต็มแล้ว</button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-info"><a href="form.php?table=<?=$row['tid']?>">จอง</a></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
<?php include "footer.php"?>