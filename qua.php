<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "basic");

if (isset($_POST['submit']))
{

    $co = $_POST['company'];


    $sql = $db->prepare("Select count(*) from " . $co . "rounds");

    $sql->execute();
    $rows = $sql->fetch(PDO::FETCH_NUM);
    $ut = $rows[0];



    echo $ut;

    for ($x = 1; $x < $ut; $x++) {
       
        $i = $x;

        $brandlist = $_POST['brandslist'];


        foreach ($brandlist as $branditems) {
        
            $arraydata = explode("-", $branditems);
    

            $query = "INSERT INTO qualifiedrounds (roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$i')";
            $query_run = mysqli_query($con, $query);
        }

        if ($query_run) {

?>
            <div class="card-body">

                <form action="trial2.php" method="POST">

                    <?php



                    $brand_query = "SELECT distinct(roll),name,nc,branch,ac FROM qualifiedrounds where nc='$co' and roundqualified='$i'";

                    $query_run = mysqli_query($con, $brand_query);

                    if (mysqli_num_rows($query_run) > 0) {
                        $sn = 1;
                        foreach ($query_run as $brand) {
                            $str = $brand['roll'] . "-" . $brand['name'] . "-" . $brand['nc'] . "-" . $brand['branch'] . "-" . $brand['ac'];

                            // $str=$brand['roll'];
                    ?>
                            <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br>
                            <input type="" style="display:none" name="loop" value="<?= $i ?>"><?= $i ?><br>


        <?php
                        }
                    }
                }
    }
}








if($query_run){
    $_SESSION['status'] = "Inserted Successfully";
header("Location: trial.php");
echo "sucess";

}
else
{
$_SESSION['status'] = "Not Inserted";
header("Location: trial.php");
}










        ?>

        <div class="form-group mt-3">
            <!-- <input type="text" name="n" value="$nc" style="display:none"> -->
            <button name="submit" class="btn btn-primary">submit</button> <a href="admin_home.php" class="btn btn-primary">BACK</a>
        </div>

                </form>