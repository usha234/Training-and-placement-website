<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost", "root", "", "basic");

 $comp=$_SESSION['company'];
 echo $comp;
 $round=$_SESSION['rounds'];
 echo $round;
?>
             <div class="card-body">
 
                <form action="trial.php" method="POST">

                    <?php



                    //  $brand_query = "SELECT distinct(roll),name,nc,branch,ac FROM qualifiedrounds where nc='$comp' and roundqualified='$round'";

                    //  $query_run = mysqli_query($con, $brand_query);

                    //  if (mysqli_num_rows($query_run) > 0) {
                    //      $sn = 1;
                    //      foreach ($query_run as $brand) {
                    //          $str = $brand['roll'] . "-" . $brand['name'] . "-" . $brand['nc'] . "-" . $brand['branch'] . "-" . $brand['ac'];

                            
                    ?>
                            <!-- <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br> -->
                          



        <?php
                        //}
                    //} 
                 

                     //$ac="SELECT DISTINCT Rounds FROM ".$comp."rounds";
                 
                $ac = "SELECT  Rounds FROM " . $comp . "rounds WHERE Rounds NOT IN(SELECT roundqualified FROM qualifiedrounds WHERE nc='".$comp."')";
                $res = $con->query($ac);
                    
                  if(mysqli_num_rows($res)>0)
                  {
                    ?>
                     <form action="trial.php" method="POST">

                    <?php



                     $brand_query = "SELECT distinct(roll),name,nc,branch,ac FROM qualifiedrounds where nc='$comp' and roundqualified='$round'";

                     $query_run = mysqli_query($con, $brand_query);

                     if (mysqli_num_rows($query_run) > 0) {
                         $sn = 1;
                         foreach ($query_run as $brand) {
                             $str = $brand['roll'] . "-" . $brand['name'] . "-" . $brand['nc'] . "-" . $brand['branch'] . "-" . $brand['ac'];

                            
                    ?>
                            <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br>
                          



        <?php
                        }
                    } 
                
                
                    echo "<select name='ac' class ='form-control'>";
                    echo "<option> choose the round </option>";
                    while ($row2 = $res->fetch_assoc()) {
                        echo "<option value='" . $row2['Rounds'] . "'>" . $row2['Rounds'] . "</option>";
                    
                    }
                    echo "</select>";
                    
                    echo nl2br("\n");
                    echo nl2br("\n");
                    ?>

                    
        <div class="form-group mt-3">
            <input type="text" name="n" value="$nc" style="display:none"> 
            <button name="submit" class="btn btn-primary">submit</button> <a href="admin_home.php" class="btn btn-primary">BACK</a>
        </div>
<?php
                  }
                  else{




                    
                    echo "congratulations";
                    





                  }
                
                
        ?>

 
                


        <!-- <div class="form-group mt-3">
            <input type="text" name="n" value="$nc" style="display:none"> 
            <button name="submit" class="btn btn-primary">submit</button> <a href="admin_home.php" class="btn btn-primary">BACK</a>
        </div> -->
<?php
        // if (isset($_POST['submit'])) {


        //     header('Location: trial.php');

        // }
        // else{
        //      header('Location:trial.php');
        // }

?>


</form>                 