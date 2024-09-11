<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "basic");
if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}
// update
 if(isset($_REQUEST['update'])){
    $d=$_REQUEST['B'];
    $v=$_REQUEST['C'];
    //echo $v;
    //echo $d;
    $t="UPDATE year SET year='$d' where year='$v' ";
    $q=mysqli_query($conn,$t);
   
 }
  if($q){
      $_SESSION['status']="New data is Updated successfully.... ";
      header('Location: aca.php');
  }
  else{
          $_SESSION['status']="Updation Failed";
          header('Location: aca.php');
      }

   

    



 ?>