<?php
session_start();
$con = mysqli_connect("localhost","root","","test");
$l=$_POST["brandlist"];
$v=$_GET["fr"];
$u=$_GET["se"];
foreach($l as $g){
    $s="update set $u=$g from tatarounds where $v=$g";
    $t=mysqli_query($con,$s);
}
header('Location: test2.php');


?>