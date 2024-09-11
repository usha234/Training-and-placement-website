<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "basic");
if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}

//   delete
  if(isset($_REQUEST['dele'])){
   $de=$_REQUEST['D'];

    $e="DELETE from year where year='$de'";
    $rt=mysqli_query($conn,$e);
  }   

  if($rt){
      $_SESSION['status']="Data deleted successfully.... ";
      header('Location: aca.php');
  }
  else{
          $_SESSION['status']="Error in deletion...";
          header('Location: aca.php');
      }
  
?>
