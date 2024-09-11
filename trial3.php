<!-- <div class="card-body">

            <form action="trial2.php" method="POST">

              
              //$conn = mysqli_connect("localhost", "root", "", "basic");


            //   $us = $_REQUEST['branch'];
            //   $ha = $_REQUEST['nc'];
   
            
                 //$comp=$_POST['com'];
                // $brand_query = "SELECT distinct(roll),name,nc,branch,academicyear FROM qualified where nc='$ha'";
              
                //$brand_query = "SELECT distinct(roll),name,nc,branch,ac FROM qualifiedrounds where nc='$comp' and roundqualified=1";
            
              //$query_run = mysqli_query($conn, $brand_query);

              //if (mysqli_num_rows($query_run) > 0) {
                //$sn = 1;
                //foreach ($query_run as $brand) {
                  //$str= $brand['roll'] . "-" .$brand['name']."-".$brand['nc']."-".$brand['branch']. "-" .$brand['academicyear'];
              
                    // $str=$brand['roll'];
                  ?>
                  <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br>
                  

              
               //}
            //}  
                ?>
                 -->
 

<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "basic");




    // $sql = $db->prepare("Select count(*) from " . $c . "rounds");

    // $sql->execute();
    // $rows = $sql->fetch(PDO::FETCH_NUM);
    // $ut = $rows[0];
    
     



   //for ($ey = 1; $ey < $ut; $ey++) {


      

    //     $i = $ey;

//         $brandlist = $_POST['brandslist'];


//         foreach ($brandlist as $branditems) {

//             $arraydata = explode("-", $branditems);


//             $query = "INSERT INTO qualifiedrounds (roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$na')";
//             $query_run = mysqli_query($con, $query);
//         }

//         if ($query_run) {

 ?>
             <div class="card-body">

                <form action="trial.php" method="POST">

                    <?php



                    $brand_query = "SELECT distinct(roll),name,nc,branch,ac FROM qualifiedrounds where nc='$c' and roundqualified='$rou'";

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
                
            // if($x>$ut){
            //      echo "congratulations";
            //  }




            

         
            //}

        
        ?>

        <div class="form-group mt-3">
            <input type="text" name="n" value="$nc" style="display:none">
            <button name="submit" class="btn btn-primary">submit</button> <a href="admin_home.php" class="btn btn-primary">BACK</a>
        </div>

                </form>                 