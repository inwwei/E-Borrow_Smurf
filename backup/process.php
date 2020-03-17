
<?php 
session_start();
if(isset($_POST['username'])){

  include("controller.php");
  $username = $_POST['username'];
  $password = $_POST['password'];


  $sql = "select * from useraccount where userName ='".$username."' AND passWord ='".$password."' ";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)==1){


    $row = mysqli_fetch_array($result);
    $_SESSION['role'] = $row['role'];
    $usern = $row['userName'];
    $passw = $row['passWord'];

    if($_SESSION['role'] == "student"){
      $_SESSION['userName'] = $usern;
      header("location:UIShowlist.php");

    }elseif($_SESSION['role'] == "teacher"){
      $_SESSION['userName'] = $usern;
      header("location:UIShowlist.php");

    }elseif($_SESSION['role'] == "admin"){
      $_SESSION['userName'] = $usern;
      header("location:Maintain.php");

    }
    }else{
      echo "username or password flase";
      header("location:index.php");
  
    
    
  
  
  }
    

  }else{
    echo "username or password flase";
    header("location:index.php");

  
  


}


// require_once('controller.php');

// if(isset($_POST['login'])){

//   if(empty($_POST['username'])){

//     header("location:index.php");

//   }else{

//     $query = "select * from useraccount  where userName='".$_POST['username']."' and passWord='".$_POST['password']."'";
//     $result = mysqli_query($con,$query);
//     $row = mysqli_fetch_array($result);
//     if(mysqli_fetch_assoc($result)){

//      $username = $row['userName'];
//       header("location:Maintain.php?username= $username");

//     }else{
//       header("location:index.php");
     


//     }

//   }
// }else{
//   echo 'false';
// }
?>