
<?php error_reporting(0);?>
<?php
 session_start();
$conn = mysqli_connect("localhost", "root","", "basic");
echo $roll = $_GET['roll'];
$select = "select * from qualified where roll='$roll'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<form action="" method="POST" autocomplete="off">
    <div class="container-fluid my-3 mx-2">
    <h1 class="h3 mb-3 fw-normal">Student Registration</h1>

    <div class="mb-3" >
        <input value="<?php echo $row['id']?> "type="text" class="form-control" id="floatingInput" name="id" size="25" id="roll" placeholder="Enter id">

      </div>
  
      <div class="mb-3" >
        <input value="<?php echo $row['roll']?>  "type="text" class="form-control" id="floatingInput" name="roll" size="25" id="roll" placeholder="Enter Rollnumber">

      </div>
      <div class="mb-3">
          <input value="<?php echo $row['name']?> "type="text" class="form-control" id="floatingInput" name="name" size="25" id="date" placeholder="Enter name">
      </div>

      <div class="mb-3">
        <input value="<?php echo $row['ssc']?> "type="text" class="form-control" id="floatingInput" name="ssc" size="25" id="ssc" placeholder="Enter ssc (%)">
    </div>

    <div class="mb-3">
      <input value="<?php echo $row['inter']?> "type="text" class="form-control" id="floatingInput" name="inter" size="25" id="inter" placeholder="Enter intermediate(%)">
  </div>
      <div class="mb-3">
        <input value="<?php echo $row['eamcet']?> "type="text" class="form-control" id="floatingInput" name="eamcet" size="25" id="eamcet" placeholder="Enter your eamcet rank">
    </div>
    
</div>

<?php error_reporting(0);?>
<?php
// Establish a connection to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli('localhost', 'root','', 'basic');

// Retrieve data from the table
$sq = "SELECT DISTINCT branch FROM branch";
$resul = $conn->query($sq);
$ac= "SELECT DISTINCT year FROM year";
$res = $conn->query($ac);
$m= "SELECT DISTINCT name from mentor";
$re=$conn->query($m);



// Populate the dropdown



echo "<select name='year' class ='form-control'>";
echo "<option> choose the academic_year </option>";
while ($row2 = $res->fetch_assoc()) {
    echo "<option value='" . $row2['year'] . "'>" . $row2['year'] . "</option>";
}
echo "</select>";

echo nl2br("\n");

echo "<select name='branch' class ='form-control'>";
echo "<option> choose the branch </option>";
while ($row1 = $resul->fetch_assoc()) {
    echo "<option value='" . $row1['branch'] . "'>" . $row1['branch'] . "</option>";
}
echo "</select>";

echo nl2br("\n");








echo "<select name='mento' class ='form-control'>";
echo "<option> choose the mentor </option>";
while ($row3 = $re->fetch_assoc()) {
    echo "<option value='" . $row3['name'] . "'>" . $row3['name'] . "</option>";
}
echo "</select>";

echo nl2br("\n");




?>





 





      <div class="mb-3">
        <input type="text" class="form-control" id="floatingInput" name="percentage" size="25" id="percentage" placeholder="Enter percentage(%)">
    </div>

    <div class="mb-3">
      <input type="text" class="form-control" id="floatingInput" name="backlogs" size="25" id="backlogs" placeholder="No. of backlogs">
  </div>


  



        
      </div>
        <div class="row my-3 mx-2">
          <div class="col col-lg-3 col-md-6 col-sm-6">
            <h4>Gender</h4>
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="gender" value="Male">
              <label class="form-check-label" for="gender">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="Female">
              <label class="form-check-label" for="gender">
                Female
              </label>
            </div>
          </div>
          <div class="col col-lg-3   col-md-6 col-sm-6">
            <h4>Residence</h4>
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="stay" value="hostel">
              <label class="form-check-label" for="stay">
                hostel
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="stay" value="Dayscholar">
              <label class="form-check-label" for="stay">
                Dayscholar
              </label>
            </div>
          </div>
          <div class="col  col-lg-3 col-md-6 col-sm-6">
            <h4>Board</h4>
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="board" value="CBSE">
              <label class="form-check-label" for="board">
                CBSE
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="board" value="State">
              <label class="form-check-label" for="board">
                State
              </label>
            </div>
          </div>
          <div class="col col-lg-3 col-md-6 col-sm-6">
            <h4>Area</h4>
            <div class="form-check ">
              <input class="form-check-input" type="radio" name="loca" value="Local">
              <label class="form-check-label" for="loca">
                Local
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="loca" value="Non-local">
              <label class="form-check-label" for="loca">
                Non-local
              </label>
            </div>
          </div>
        </div>
  <div class="row my-3 mx-2">

    <div class="col col-lg-6">
      <input type="submit" name="update_btn" class="form-control btn btn-md btn-dark" name="submit" value="update">
      <button><a href="mana3.php">Back</a></button>
    </div>
  </div>
      </div>

    </form>
</div>

<?php error_reporting(0);?>
    <?php
if(isset($_POST['update_btn'])){
    $id=$_REQUEST['id'];
    $roll=$_REQUEST['roll'];
    $name= $_REQUEST['name'];
    $ssc=$_REQUEST['ssc'];
    $inter=$_REQUEST['inter'];

    $eamcet=$_REQUEST['eamcet'];

  $percentage=$_REQUEST['percentage'];
  $backlogs=$_REQUEST['backlogs'];

    $gender =  $_REQUEST['gender'];
    $stay = $_REQUEST['stay'];
    $board = $_REQUEST['board'];
    $loca = $_REQUEST['loca'];

    $update= "update qualified set roll='$roll',name='$name',ssc='$ssc',inter='$inter',eamcet='$eamcet',percentage='$percentage',backlogs='$backlogs',gender='$gender',stay='$stay',board='$board',loca='$loca' where id='$id'";




    $data=mysqli_query($conn,$update);
    if($data){
        ?>
        <script type="text/javascript">
 alert("data updated");
</script>
<?php

    }
    else {
        ?>
        <script type="text/javascript">
 alert("plz try again");
</script>
<?php
    }

}
?>

