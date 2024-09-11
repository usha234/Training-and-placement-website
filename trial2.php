<?php
session_start();
$con = mysqli_connect("localhost","root","","basic");

if(isset($_POST['submit']))
{
//     $comp=$_POST['com'];             
// $c=0;
// //for loop for round table
// $s="SELECT Rounds FROM ".$comp."rounds";
// $u=mysqli_query($con,$s);
// $yt="Select count(*) from ".$comp."rounds";
// $ut=mysqli_query($con,$yt);
// foreach($u as $k){
//     echo $k["Rounds"];
//     $w=$k['Rounds'];
      $v = $_POST['loop'];
     
      $_SESSION['loo']=$v;
      $lo=$_SESSION['loo'];
       

    
     $brandlist = $_POST['brandslist'];
    
        
    
    foreach($brandlist as $branditems)
    { 
        // echo $branditems."<br>";
        $arraydata = explode("-",$branditems);
       // print_r($arraydata);
          $l=$lo+1;
        $query = "INSERT INTO qualifiedrounds (roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$l')";
        $query_run = mysqli_query($con, $query);
        $_SESSION['loopo']=$l;
        $ey=$_SESSION['loopo'];
        
    }


    if($query_run){
             $_SESSION['status'] = "Inserted Successfully";
        header("Location: trial.php");
        echo "success";

    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: trial.php");
     }
        
    
}  

?>
