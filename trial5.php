<?php
error_reporting(0);
session_start();

$n = $_REQUEST['ac'];
echo "<input type='text' name='yt' value='" . $n . "' style='display:none'>";
$_SESSION['rounds']=$n;
$rou=$_SESSION['rounds'];
echo $rou;



echo $brand[0];










// if (isset($_POST['submit'])) {

// foreach ($brand as $branditems) {

//       $arraydata = explode("-", $branditems);
//       echo $arraydata[0];
//       echo $arraydata[1];
//       echo $arraydata[2];
//       echo $arraydata[3];
//       echo $arraydata[4];

//  }
 


//   $query = "INSERT INTO qualifiedrounds (roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$n')";
//     $query_run = mysqli_query($con, $query);
//  }



//     if($query_run){
    
//         header('Location: trial3.php');
//   }
//      else{
        
//              header('Location: trial.php');
//          }
//      }  