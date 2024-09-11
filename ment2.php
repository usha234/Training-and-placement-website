<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>COMPANY REGISTRATION</title>
  </head>

    <style>


.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
        .bg-1 { 
    background-color:  #212020; /* Green */
    color: #ffffff;
  }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: relative;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  font-size: 15px;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="admin_home.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    
    <header class="site-header sticky-top py-1">
      <nav class="container d-flex flex-column flex-md-row justify-content-between ">
        <a class="py-2 text-light" href="admin_home.html" aria-label="Product">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>GPCET</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="nav-item nav-link text-light " href="admin_home.html">Home</a>
        <a class="nav-item dropdown nav-link dropdown-toggle text-light "href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
        <ul class="dropdown-menu text-light " aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item text-dark" href="branch.php" >Branch Registration</a></li>
          <li><a class="dropdown-item text-dark" href="aca.php" >Academic_year Registration</a></li>
          <li><a class="dropdown-item text-dark" href="company_reg.html" >Company Registration</a></li>
          <li><a class="dropdown-item text-dark" href="stu_register.html">Student Registration</a></li>
          <li><a class="dropdown-item text-dark" href="mana2.php">Mapping</a></li>
      




          
        </ul>
        <a class="nav-item dropdown nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reports</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item text-dark" href="statistics.html">Statistics</a></li>
          <li><a class="dropdown-item text-dark" href="reg_companies_reports.html">Registered Companies</a></li>
          <li><a class="dropdown-item text-dark" href="branch_wise_reports.html">Branchwise Reports</a></li>
          <li><a class="dropdown-item text-dark" href="individual_report.html">Individual Reports</a></li>
        </ul>
        <a class="nav-item dropdown nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Manage</a>
    
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item  text-dark" href="index2.php">Round1</a></li>
          <li><a class="dropdown-item text-dark" href="index3.php">Round2</a></li>
          <li><a class="dropdown-item text-dark" href="index4.php">Round3</a></li>
          <li><a class="dropdown-item text-dark" href="index5.php">Round4</a></li>
          <li><a class="dropdown-item text-dark" href="index6.php">Round5</a></li>
          <li><a class="dropdown-item text-dark" href="index7.php">Round6</a></li>
          <li><a class="dropdown-item text-dark" href="index8.php">Final Selected</a></li>
    
        </ul>
        <a class="nav-item nav-link text-light" href="about_us.html">About Us</a>
        <a class="nav-item nav-link text-light" href="index.html">Sign Out</a>
      </nav>
    </header>


    <?php error_reporting(0);?>
        <?php
        // servername => localhost

        // username => root

        // password => empty

        // database name => staff

        $conn = mysqli_connect("localhost","root","", "basic");



        // Check connection

        if($conn === false){

            die("ERROR: Could not connect. "

                . mysqli_connect_error());

              }

                  
                    
                    $roll=$_REQUEST['roll'];
                    $name= $_REQUEST['name'];
                    $qua=$_REQUEST['qua'];
                    $gender=$_REQUEST['gender'];
                    $loca = $_REQUEST['loca'];
                



                    // Performing insert query execution

                    // here our table name is college
                    
                  
                    $sql = "INSERT INTO mentor VALUES ('$id','$roll','$name','$qua','$gender','$loca')";

                        if(mysqli_query($conn, $sql)){

                                  // echo "<h3>data stored in a database successfully."

                                       //. " Please browse your localhost php my admin"

                                       //. " to view the updated data</h3>";


                                  // echo nl2br("\n$roll\n$name\n$eamcet\n$branch\n$academicyear\n$percentage\n$gender\n$stay\n $board\n $loca");

                               } else{

                                   echo "ERROR: Hush! Sorry $sql. "

                                       . mysqli_error($conn);

                               }



                               // Close connection

                            

                               ?>

<?php error_reporting(0);?>   
<?php
    $db= $conn;
    $tableName="mentor";
    $columns= ['id','roll','name','qua','gender','loca'];
    $fetchData = fetch_data($db, $tableName, $columns);
    function fetch_data($db, $tableName, $columns)
    {
     if(empty($db)){
      $msg= "Database connection error";
     }elseif (empty($columns) || !is_array($columns)) {
      $msg="columns Name must be defined in an indexed array";
     }elseif(empty($tableName)){
       $msg= "Table Name is empty";
    }else{
    
    $columnName = implode(", ", $columns);
    $query = "SELECT ".$columnName." FROM $tableName";
    $result = $db->query($query);
    
    if($result== true){ 
     if ($result->num_rows > 0) {
        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg= $row;
     } else {
        $msg= "No Data Found"; 
     }
    }else{
      $msg= mysqli_error($db);
    }
    }
    return $msg;
    }
    ?>

    <center>


<br>
<br>
<button onclick="myFunction()">Click Here to view the registered Mentors</button>
<br>
<br>




<script>
function myFunction() {
  var x = document.getElementById("myDIV");
 if(x.style.display === "none")
 {
     x.style.display = "block";
 }
  else {
    x.style.display = "none";
  }
}
</script>

<div id="myDIV">


     
        <table border="1">
           <thead>
    
             <th>ID</th>
             <th>Roll</th>
             <th>name</th>
             <th>qua</th>
             <th>gender</th>
             <th>locality</th>

    
             
        </thead>
        <tbody>
      <?php
          if(is_array($fetchData)){      
          $sn=1;
          foreach($fetchData as $data){
        ?>
          <tr>
          
          <td><?php echo $data['id']??''; ?></td>
          <td><?php echo $data['roll']??''; ?></td>
          <td><?php echo $data['name']??''; ?></td>
          <td><?php echo $data['qua']??''; ?></td>
          <td><?php echo $data['gender']??''; ?></td>
          <td><?php echo $data['loca']??''; ?></td>
          
         </tr>
         <?php
          $sn++;}}else{ ?>
          <tr>
            <td colspan="8">
        <?php echo $fetchData; ?>
      </td>
        <tr>
        <?php
        }?>
        </tbody>
         </table>
       </div>
    </div>
    </div>
    </div>

        
        

    </div>
  </div>
    
        

      </center>   
   </div>
                    































    
  

   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
 this.classList.toggle("active");
 var content = this.nextElementSibling;
 if (content.style.display === "block") {
   content.style.display = "none";
 } else {
   content.style.display = "block";
 }
});
}


 </script>
 </body>
 </html>



 