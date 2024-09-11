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
    $t="UPDATE branch SET branch='$d' where branch='$v' ";
    $q=mysqli_query($conn,$t);
   
 }
  if($q){
      $_SESSION['status']="New data is Updated successfully.... ";
      header('Location: branch.php');
  }
  else{
          $_SESSION['status']="Updation Failed";
          header('Location: branch.php');
      }

   

    



 ?>