<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 

    <link rel="stylesheet" type="text/css" href="UI.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet">


</head>

<body>

    <header class="newfont">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #FF9966">
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <a class="py-1" href="#" aria-label="Product">
                    <a href="#" class="navbar-brand d-flex align-items-center ">
                        <img src="logo/logo_sc.png" width="55" class="mr-3">
                    </a>
                </a>
            </div>
            <h2 style="font-size:30px" class="h2 btext"><a class="btext" href="UIshowlist.php">หน้าหลัก</a></h2>&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="btext" href="HistoryStudent.php">ประวัติการยืม</a>
                    </li>&nbsp;&nbsp;
                    
                    <br>
                </ul>


                <?php
                
                $serverName = "localhost";
                $userName = "root";
                $userPassword = "";

                // $serverName = "10.199.66.227";
                // $userName = "20s2_g4";
                // $userPassword = "Dwg7Q6UQ";

                $dbName = "20s2_g4";


                $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
                mysqli_set_charset($conn, "utf8");

                $userID = $_SESSION['userName'];
                $sqlus = "SELECT * FROM useraccount WHERE userName = '$userID'";
                $us = mysqli_query($conn, $sqlus);
                $usID = mysqli_fetch_array($us);

                ?>
                
                <!-- profile -->
                <div class="btext">
                        <h6><?php
                        echo " " . $usID['firstName'] . " " . $usID['lastName'] ;
                        ?></h6>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;

                <a href="logout.php?logout"><button class="btn btn-outline-dark my-2 my-sm-0" type="submit" >     Log out
                </button></a>
                    

            </div>
        </nav>

    </header>
    <div class="position-relative overflow-hidden">
        <h3>รายการอุปกรณ์</h3>
    </div>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>