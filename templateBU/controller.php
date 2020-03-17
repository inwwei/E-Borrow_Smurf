<?php 
	$serverName = "10.199.66.227";
        $userName = "20S2_g4";
        $userPassword = "Dwg7Q6UQ";

        $dbName = "20s2_g4";
		$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
		mysqli_set_charset($con, "utf8");
		if(!$con){
			die('Please Check Your Connection'.mysqli_error($con));
		}

?>
