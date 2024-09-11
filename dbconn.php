<?php

$db = mysqli_connect("localhost","root","","basic");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>