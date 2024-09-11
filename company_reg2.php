<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT companyreg FROM company";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $result;
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "basic");
if($conn === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}

$names = $_POST["mytext"];
   
   // insert data into database
   foreach ($names as  $name) {
     
     $sql = "INSERT INTO round VALUES ('$id','$name')";
     $g=mysqli_query($conn, $sql);
   }
     if($g){
        $_SESSION['status']="Successfully Inserted.....";
        header('Location: company_reg.php');
     }
     else{
        $_SESSION['status']="Insertion Failed";
        header('Location: company_reg.php');
     }
     $companyreg = $_REQUEST['companyreg'];
     $date =  $_REQUEST['date'];
         $package=$_REQUEST['package'];
         $sql = "INSERT INTO company  VALUES ('$id','$companyreg','$date','$package','$rounds','$round1','$round2','$round3','$round4','$round5','$round6')";
         


?>
<?php error_reporting(0);?>
        <?php
  
       
        $conn = mysqli_connect("localhost", "root","", "basic");
          
      
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
       
        $companyreg = $_REQUEST['companyreg'];
		$date =  $_REQUEST['date'];
        $package=$_REQUEST['package'];
        $rounds=$_REQUEST['rounds'];
	
        $round1=$_REQUEST['round1'];
        $round2=$_REQUEST['round2'];
        $round3=$_REQUEST['round3'];
      
        $round4=$_REQUEST['round4'];
        $round5=$_REQUEST['round5'];
        $round6=$_REQUEST['round6'];
        $branch=$_REQUEST['branch'];

    
		
		
    $sql = "INSERT INTO company  VALUES ('$companyreg','$date','$package','$rounds','$round1','$round2','$round3','$round4','$round5','$round6')";
    








          
       ?>

