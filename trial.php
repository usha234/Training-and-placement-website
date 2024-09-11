<?php
error_reporting(0);
session_start();
if (isset($_POST['submit'])) {
    
    $con = mysqli_connect("localhost", "root", "", "basic");
    $db_host        = 'localhost';
    $db_user        = 'root';
    $db_pass        = '';
    $db_database    = 'basic';
    
    
    $db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($_POST['com']){
  $comp = $_POST['com'];
  $_SESSION["company"]=$comp;
}
   
    
    
    $c=$_SESSION['company'];
    echo $c;

    $n = $_REQUEST['ac'];
    echo "<input type='text' name='yt' value='" . $n . "' style='display:none'>";
    $_SESSION['rounds']=$n;
    $rou=$_SESSION['rounds'];
    echo $rou;
    
    $brandlist = $_POST['brandslist'];


     foreach ($brandlist as $branditems) {

          $arraydata = explode("-", $branditems);


      $query = "INSERT INTO qualifiedrounds (roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$rou')";
         $query_run = mysqli_query($con, $query);
     }



         if($query_run){
          //echo "success";
            header('Location: trail6.php');
       }
         else{
            
                 header('Location: trial.php');
            }
     }     
