<?php  

                if(isset($_SESSION['status']))
                {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                 }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Selection of students<a href="admin_home.html" class="btn btn-primary" >BACK</a> </h4>
                    </div>
                    <div class="card-body">

                        <form action="insertmap.php" method="POST">
                        <?php 
                            $conn = mysqli_connect("localhost","root","","basic");

                            $brand_query = "SELECT id,roll,name,branch,percentage,backlogs FROM nin,map where map.branch=nin.branch and map.ac=nin.academicyear ";
                            $query_run = mysqli_query($conn, $brand_query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $brand)
                                {
                                  $str= $brand['id']."-".$brand['roll']."-".$brand['name']."-".$brand['branch']."-". $brand['percentage']."-".$brand['backlogs'];
                                    ?>
                                    <input type="checkbox" name="brandslist[]" value="<?= $str?>"   ><?=$str?><br/>
                                     <?php
                                }
                            } 
                            else
                            {
                                echo "No Record Found";
                            }
                        ?>

<div class="form-group mt-3">
                                <button name="submit" class="btn btn-primary"  >submit</button> <a href="admin_home.html" class="btn btn-primary" >BACK</a>
                                                        </div>
                        </form>