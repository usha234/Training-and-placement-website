<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>ADMIN HOME PAGE</title>
  </head>

    <style>
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
      

    </style>

    
    <!-- Custom styles for this template -->
    <link href="admin_home.css" rel="stylesheet">
  </head>
  <body>
    
    
    <header class="site-header sticky-top py-1">
      <nav class="container d-flex flex-column flex-md-row justify-content-between ">
        <a class="py-2 text-light" href="admin_home.html" aria-label="Product">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>GPCET</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="nav-item nav-link text-light " href="admin_home.php">Home</a>
        <a class="nav-item dropdown nav-link dropdown-toggle text-light "href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
        <ul class="dropdown-menu text-light " aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item text-dark" href="company_reg.html" >Company Registration</a></li>
          <li><a class="dropdown-item text-dark" href="student_reg.html">Student Registration</a></li>
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
    
<body>
    <center>
    
        
  
      
       <?php
       error_reporting(0);
        $conn = mysqli_connect("localhost","root","", "basic");
          
      
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
       
        $companyreg = $_REQUEST['companyreg'];
		    $date =  $_REQUEST['date'];
        $package=$_REQUEST['package'];
        
	
         $names = $_POST["mylist"];
   
// insert data into database
// foreach ($names as  $name) {
// foreach ($names as  $name) {
  // 
  // $sql = "INSERT INTO branch  VALUES ('$id','$name')";
  // $g=mysqli_query($conn, $sql);
// }
		
		
   $sql = "INSERT INTO company  VALUES ('$id','$companyreg','$date','$package')";
   $l=mysqli_query($conn, $sql);
    if($l)
    {
			echo nl2br("");
		} else
    {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
	}
		
		// Close connection





    // echo "$companyreg";


    //be careful
    
     $q="CREATE TABLE $companyreg (
     Package int,
       Date date
      
   )";
  
  $a=$companyreg."rounds";
  // echo $a;
  $s="CREATE TABLE $a(
    id int not null,
    Rounds varchar(20),

    primary key(id)
    
)";

  
    
    $r=$conn->query($q);
    $s=$conn->query($s);
    if($s){
        // echo "success";
        $i=0;
foreach ($names as  $name) {
  $i++;
   $sql = "ALTER TABLE $companyreg  add $name varchar(225)";
   $g=mysqli_query($conn, $sql);
  $st="INSERT INTO $a values ('$i','$name')";
  $f=$conn->query($st);
}
}	
  
		mysqli_close($conn);
		?>
      

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Insert rounds data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="company_reg2.php" method="post">
      <div class="modal-body">
       <!-- input -->
      <div class="input_fields_wrap">

<button class="add_field_button btn btn-outline-secondary">Add</button>
<br>
<br>
<input type="text" class="form-control mb-3" name="mytext[]" placeholder="Enter round">
</div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
        <button type="submit" name='su' class="btn btn-outline-primary">Submit</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- input script -->
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="input-group mb-3"><input placeholder="Enter branch" type="text" name="mytext[]" class="form-control"><div class="input-group-append"><button class="btn btn-outline-danger remove_field" type="button">Remove</button></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(y){ //user click on remove text
        y.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
</script>

<!-- edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editLabel">Updata Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="cupdate.php" method="post">
      <div class="modal-body">
        <!-- <div class="from-group">
            <label for="">Id</label>
            <input type="text" name="id" id="i" class="form-control" placeholder='ID'>

        </div> -->
        <div class="form-group">
        <label for="">Enter the year</label>
            <input type="text" name="B" id="b" class="form-control" placeholder='Year'>
             <input type="text" name="C" id="c" class="form-control " style="display:none" placeholder='Year'>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
        <button type="submit" name='update' class="btn btn-outline-info">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- END OF EDIT MODEL -->


<!-- DELETE MODEL -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteLabel">Delete Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="cdelete.php" method="post">
      <div class="modal-body">
        <strong><h1>Do you want to delete...????</h1></strong>
        <div class="form-group">
        
        <input type="text" name="D" id="d" class="form-control" placeholder='rounds'>
             
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
        <button type="submit" name='dele' class="btn btn-outline-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- END OF DELETE  ,,,,,, -->



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- modal container -->
 <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              
                <?php
                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                    ?>
                     <div class="alert alert-info alert-dismissible   fade show" role="alert">
                      
                      <strong><?php echo $_SESSION['status']; ?></strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>                 
                     
                    <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card-header">
                    
                    <h2>Conduct Rounds
                <button type="button" class="btn btn-outline-info float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add 
                 </button>
            </h1>

                </div>
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope='col'></th>
      <th scope='col'></th>
      <th scope="col">Rounds</th>
      <th scope='col'></th>
      <th scope='col'></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn=mysqli_connect("localhost", "root", "", "basic");
    $sql="select * from round";
    $g=mysqli_query($conn, $sql);
    $s=1;
    if(mysqli_num_rows($g)>0){
       while($r=mysqli_fetch_array($g)){
        ?>
        <tr>
           <td class=' justify-content-center align-content-center'><?php echo "round".$s++;?></h5></td>
            <td>  </td>
            <td></td>
            <td class='st-i  justify-content-center align-content-center'><h5><?php echo $r['round'];?></h5></td>
            <td></td>
            <td >
              <div>
                <button class='ed btn btn-outline-info btn-lg' data-bs-toggle="modal" data-bs-target="#edit"> <ion-icon name="create-outline"></ion-icon></button>
                 <button class='btn btn-outline-danger del btn-lg' data-bs-toggle="modal" data-bs-target="#delete"><ion-icon name="trash-outline"></ion-icon></button> 
                 </div>
            </td>
        </tr>
        <?php
       } 
    }
    ?>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end   ,,,,,,,,,,,,,,,,,, -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!-- delete script -->
<script>
$(document).ready(function(){
   $('.del').click(function(e){
    e.preventDefault();
    
    var tr1 =$(this).closest('tr').find('.st-i').text();
    console.log(tr1);
   

    $('#d').val(tr1);
    
    

      });    
});
</script>

<!-- update script -->
<script>
$(document).ready(function(){
   $('.ed').click(function(e){
    e.preventDefault();
    // alert('hello')
    var tr =$(this).closest('tr').find('.st-i').text();
    console.log(tr);
    //$tr=$(this).closest('tr');
    //       var st_id=$tr.children('td').map(function(){
    //         return $(this).text();
    //       }).get();
    //  console.log(st_id[1]);


    $('#b').val(tr);
    $('#c').val(tr);
    //  $('#b').val(st_id[1]);
     






    //  $.ajax({
    //    type: "post",
    //     url: 'inser.php',
    //     data:  {
    //  'checking_ed': true,
    //         'student_id':st_id,
    //     },
    //    success :function(response) {
    //         console.log(response);
    //         // $.each(response,function(key,value) {
    //        //     // console.log(value['br']);
               

    //         // });
        
    //      }
    //   });
  

    });    
});

</script>


</body>
</html>
























  <!--static image
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">GPCET - T & P</h1>
      <p class="lead fw-normal">Your Bright Future is Our Mission</p>
      <a class="btn btn-outline-secondary"  href=" company_reg.html"  >
        <?php
        if(mysqli_query($conn, $sql)){
            echo "<h3>DATA STORED SUCCESSFULLY</h3>"; 
  

        }
		else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
       Back</a>

    </div>
  </div>


    </center>
</body>
      -->
  <!--3 images section
  <section>
    <div class="container my-3">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="pictures/action.jpg">
          <div class="card-body">
            <p class="card-text">ACTION</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="pictures/communication.jpg">
          <div class="card-body">
            <p class="card-text">COMMUNICATE</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img  class="bd-placeholder-img card-img-top" width="100%" height="225" src="pictures/technical.jfif">
          <div class="card-body">
            <p class="card-text">TECHNICAL KNOWLEDGE</p>
          </div>
        </div>
      </div>
    </section>
      -->
    
  <!--
</main>

<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy;2022</small>
    </div>
    <div class="col-6 col-md">
      <h5>Navigation</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="admin_home.html">Home</a></li>
        <li><a class="link-secondary" href="company_reg.html">Company registration</a></li>
        <li><a class="link-secondary" href="student_reg.html">Student registration</a></li>
        <li><a class="link-secondary" href="#">Reports</a></li>
        <li><a class="link-secondary" href="#">About us</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
      -->
  
</footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
