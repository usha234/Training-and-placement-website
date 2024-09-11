<META http-equiv="REFRESH" CONTENT="0; URL=  http://localhost/t&p2/mana3.php">
<?php

$con = mysqli_connect("localhost", "root", "", "basic");
if($con === false){

    die("ERROR: Could not connect. "

        . mysqli_connect_error());

}

$roll = $_GET['roll'];
$query = "delete from qualified where roll='$roll'";
$data = mysqli_query($con,$query);
if($data){
    ?>
<script type ="text/javascript">
    alert("data deleted")
    </script>
    <?php
}
else {
    ?>
    <script type="text/javascript">
        alert("plzz try again");
        </script>
    <?php
}



?>