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
     
     $sql = "INSERT INTO branch  VALUES ('$id','$name')";
     $g=mysqli_query($conn, $sql);
   }
     if($g){
        $_SESSION['status']="Successfully Inserted.....";
        header('Location: branch.php');
     }
     else{
        $_SESSION['status']="Insertion Failed";
        header('Location: branch.php');
     }
    
//edit
// if(isset($_POST['update']))
// {
//     $s_i=$_POST['student_id'];
//     $res  =  [] ;
//     $qe=" SELECT * FROM branch where branch.i='$s_i' ";


//     $qq=mysqli_query($conn, $qe);
    


//     if(mysqli_num_rows($qq)>0){
//         foreach($qq as $re){
//             array_push($res,$re);
//             header('Content-Type: application/json');
//             echo json_encode($res);
//         }
//     }
//     else{
//         echo $return ='<h5>NO RECORD FOUND</h5>';
//     }
// }


// if(isset($_POST['update'])){
//     $d=$_post['B'];
//     $v=$_post['C'];
//     ECHO $v;
//     $t="UPDATE branch SET br='$d' where br='$v' ";
//     $q=mysqli_query($conn,$t);
// }



?>
