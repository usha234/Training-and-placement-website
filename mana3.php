<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
  <center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 
      


 

<?php  
error_reporting(0);
// $con = mysqli_connect("localhost","root","","basic");
// $query = "SELECT  distinct roll,name,percentage,backlogs,nc FROM qualified";
// $result = mysqli_query($con, $query);
if(isset($_POST['submit']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="basic";//database name  
$tbl_name="qualified"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$brandlist = $_POST['brandslist']; 
  $n=$_REQUEST['n'];
  $v=$_REQUEST['rt'];
  $b=$_REQUEST['pt'];

  
foreach($brandlist as $branditems)
{

  

$arraydata = explode("-",$branditems);
// print_r($arraydata);

 $q = "INSERT INTO qualified (roll,name,percentage,backlogs,nc,branch,academicyear) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$n','$b','$v')";
 $query_run = mysqli_query($con, $q); 
// echo $arraydata[0];
// echo $arraydata[1];
// echo $arraydata[2];
// echo $arraydata[3];
// echo $n;
// echo $v;
// echo $b;
// if($query_run){
//   echo "success";
// }



} 
}

 ?>
 <table>
  <tr>
    <td><img class="mb-4" src="pictures/gpcetlogo.jpeg" alt="" width="72" height="57"></td>
    <td><strong><h2>G.Pullaiah College of Engineering and Technology</h2></strong></td>
</tr>
 </table>


<table  cellspacing="1" cellpadding="10">
<tr>
  <td><h5 style="color:blue;border: 10px;">Company : <?php echo $n ?></h6></td>
  <td><h5 style="color:orange;border: 10px;">Academic year : <?php echo $v ?></h6></td>
  <td><h5 style="color:violet;border: 10px;">Branch : <?php echo $b ?></h6></td>


</tr>

</table>    


<br>
<br>
 <table border ="1" cellspacing="1" cellpadding="10">
  <tr>
   <th>SNO</th>
     <th>ROLL NUMBER</th>
     <th>NAME</th>
     <!-- <th>PERCENTAGE</th>
     <th>BACKLOGS</th>
     <th>Company</th>
     <th>Branch</th>
     <th>Date</th>  -->

     <th>Signature</th>
     
   </tr> 
 <?php
 $query = "SELECT  distinct roll,name,percentage,backlogs,nc FROM qualified";
 $result = mysqli_query($con, $query);
 if (mysqli_num_rows($result) > 0) {
//   $query = "SELECT  distinct roll,name,percentage,backlogs,nc FROM qualified";
//  $result = mysqli_query($con, $query);
   $sn=1;
   foreach($brandlist as $branditems) {
      $arraydata = explode("-",$branditems);
  ?>
  <tr>
  <td><?php echo $sn++; ?> </td>
   <td><?php echo $arraydata[0]; ?> </td>
    <td><?php echo $arraydata[1]; ?> </td>
    <!-- <td><?php //echo $arraydata[2]; ?> </td>
    <td><?php //echo $arraydata[3]; ?> </td>
    <td><?php // echo $n; ?> </td>
    <td><?php //echo $b; ?> </td>
    <td><?php //echo $v; ?> </td> -->

     <td>
               <div>
               <!-- <a href="maupdate.php?id= <?php echo $arraydata[0]; ?>"><button class='ed btn btn-outline-info btn-lg' data-bs-toggle="modal" data-bs-target="#edit"> <ion-icon name="create-outline"></ion-icon></button></a>
                 <a onclick="return confirm('Are u sure to delete')" href="madelete.php?id=<?php echo $arraydata[0] ?>"> <button class='btn btn-outline-danger del btn-lg' data-bs-toggle="modal" data-bs-target="#delete"><ion-icon name="trash-outline"></ion-icon></button></a> -->
                  </div>
            
  </td>
    


 <tr>
  <?php
}}?>
 </table
  ?>
<!-- <?php
// $conn = mysqli_connect("localhost","root","","basic");
//  $query = "SELECT * from qualified";
// $result = mysqli_query($conn, $query);
?>
<table>
  <tr>
 <td><img class="mb-4" src="pictures/gpcetlogo.jpeg" alt="" width="72" height="57"></td>
 <td><strong><h2>G.Pullaiah College of Engineering and Technology</h2></strong></td>
</tr>
</table>
<center><h4><strong>(Autonomous)</strong></h4></center> 
<table border ="1" cellspacing="1" cellpadding="10">
<tr>
  <th>SNO</th>
     <th>ROLL NUMBER</th>
     <th>NAME</th>
     <th>PERCENTAGE</th>
     <th>BACKLOGS</th>
     <th>Company</th>
     <th>Branch</th>
     <th>Date</th>

   <th>Signature</th>
      <th>Operations</th>
   </tr> 
<?php
// if (mysqli_num_rows($result) > 0) {
//   $sn=1;
//   foreach($result as $arraydata) {
    // $arraydata = explode("-",$branditems);
 ?>
 <tr>
  <td><?php // echo $sn++; ?> </td>
 
  <td><?php //echo $arraydata['roll']; ?> </td>
   <td><?php //echo $arraydata['name']; ?> </td>
   <td><?php //echo $arraydata['percentage']; ?> </td>
   <td><?php //echo $arraydata['backlogs']; ?> </td>
   
   <td><?php //echo $n; ?> </td>
    <td><?php //echo $b; ?> </td>
    <td><?php //echo $v; ?> </td>



   <td >
              <div>
              <a href="maupdate.php?id=<?php //echo $arraydata['roll']; ?>"><button class='ed btn btn-outline-info btn-lg' data-bs-toggle="modal" data-bs-target="#edit"> <ion-icon name="create-outline"></ion-icon></button></a>
                <a onclick="return confirm('Are u sure to delete')" href="madelete.php?id=<?php //echo $arraydata['roll']; ?>"> <button class='btn btn-outline-danger del btn-lg' data-bs-toggle="modal" data-bs-target="#delete"><ion-icon name="trash-outline"></ion-icon></button></a>
                 </div>
            
  </td>




 <tr>
 <?php
//}}?>
 </table
 ?>

 -->































 <br>
 <br>
<button onclick="window.print()"><strong>Print</strong></button>

</center>
  </body>
  </html>









    
