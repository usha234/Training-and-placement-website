<?php
session_start();
$con = mysqli_connect("localhost","root","","test");
$l=$_POST["brandlist"];
$v=$_GET["pr"];
$u=$_GET["pe"];
foreach($l as $t){
    $s="update set $v=$t from tata where $u=$t ";
    $t=mysqli_query($con,$s);
}
 header('Location: test2.php');
?>