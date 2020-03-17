
<?php 
session_start();
    if(($_SESSION['IDs']==NULL)){
     
      header("location:FormCheckMail.php?message=กรุณากลับไปเลือกครุภัณฑ์อีกครั้ง");
      }
    else
    {
      $mail=$_POST['mail'];
      $IDs=$_SESSION['IDs'];

    
      $serverName = "10.199.66.227";
      $userName = "20S2_g4";
      $userPassword = "Dwg7Q6UQ";

      // $serverName = "localhost";
      // $userName = "root";
      // $userPassword = "";

      $dbName = "20s2_g4";
      $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
      mysqli_set_charset($conn, "utf8");
    
      $res = mysqli_query($conn, "SELECT * FROM  useraccount WHERE mail ='$mail'");
      $row = mysqli_fetch_array($res);
      $IDs=$_SESSION['IDs'];

      $res1 = mysqli_query($conn, "SELECT * FROM  item where IDs=$IDs ");
      $row1 = mysqli_fetch_array($res1);

      $idus=$row['idus'];
      $stref=$row1['Statusref'];
            if($row['mail']==$mail){
                    if($row['role']=="student"){
                            if($row1['StudentRight']=="อนุญาต"){
                             
                                  header("location:AdminBorrowform.php?IDs=$IDs&&idus=$idus&&Statusref=$stref");
                            }else{
                              header("location:FormCheckMail.php?message=ไม่ได้รับอนุญาตในการยืม กรุณาตรวจสอบสิทธิ์");
                            }
                    }elseif($row['role']=="teacher"){
                            if($row1['TeacherRight']=="อนุญาต"){
                              header("location:AdminBorrowform.php?IDs=$IDs&&idus=$idus&&Statusref=$stref");
                            }else{
                              header("location:FormCheckMail.php?message=ไม่ได้รับอนุญาตในการยืม กรุณาตรวจสอบสิทธิ์");
                            }
                    }elseif($row['role']=="staff"){
                            if($row1['StaffRight']=="อนุญาต"){
                              header("location:AdminBorrowform.php?IDs=$IDs&&idus=$idus&&Statusref=$stref");
                            }else{
                              header("location:FormCheckMail.php?message=ไม่ได้รับอนุญาตในการยืม กรุณาตรวจสอบสิทธิ์");
                            }
              }
              }else{
              header("location:FormCheckMail.php?message=อีเมลไม่ถูกต้อง");
              // header("location:FormCheckMail.php?message=your_mail_flase");
            }
          }
        // include("controller.php");
        // $mail = $_POST['mail'];
        // $sql = "select * from useraccount where mail ='".$mail."' ";
        // $result = mysqli_query($con,$sql);
        //   if(mysqli_num_rows($result)==1){
        
        
        //     $row = mysqli_fetch_array($result);
        //     $_SESSION['mail'] = $row['mail'];
        //     $userName = $row['userName'];
        //     $passWord = $row['passWord'];
        //     $firstName = $row['firstName'];
        //     $lastName = $row['lastName'];
        //     $mail = $row['mail'];
        //     $tel = $row['tel'];
        //     $role = $row['role'];
        
        //       if($_SESSION['mail'] != ""){
        //         $_SESSION['userName'] = $userName;
        //         $_SESSION['passWord'] = $passWord;
        //         $_SESSION['firstName'] = $firstName;
        //         $_SESSION['lastName'] = $lastName;
        //         $_SESSION['mail'] = $mail;
        //         $_SESSION['role'] = $role;
        //         // header("location:AdminBorrowform.php");
          
              // }
          // }
          
        
        

  
  



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