



<center>
<!-- DEL-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<!-- END OF EDIT MODEL -->


<!-- DELETE MODEL -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 
      


<?php  
error_reporting(0);

$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="basic";//database name  
$tbl_name="nin"; //table name  
$conn=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
// $brandlist = $_POST['brandslist']; 
  
// foreach($brandlist as $branditems)
// {

// $arraydata = explode("-",$branditems);
// // print_r($arraydata);

//  $query = "INSERT INTO nin (SNO,roll,name,ssc,inter,eamcet,branch,year,mento,percentage,backlogs,gender,stay,board,loca) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$arraydata[5]','$arraydata[6]','$arraydata[7]','$arraydata[8]','$arraydata[9]','$arraydata[10]','$arraydata[11]','$arraydata[12]','$arraydata[13]','$arraydata[14]')";
//  $query_run = mysqli_query($con, $query); 
// } 

$query = "SELECT * from nin";
$result = mysqli_query($conn, $query);
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
    
    
    <th>branch</th>

    <th>percentage</th>
    <th>backlogs</th>
    <th>Operations</th>


   
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  foreach($result as $arraydata) {
    // $arraydata = explode("-",$branditems);
 ?>
 <tr>
  <td><?php echo $sn++; ?> </td>
 
  <td><?php echo $arraydata['roll']; ?> </td>
   <td><?php echo $arraydata['name']; ?> </td>
   <td><?php echo $arraydata['branch']; ?> </td>
   <td><?php echo $arraydata['percentage']; ?> </td>
   <td><?php echo $arraydata['backlogs']; ?> </td>
   <td >
              <div>
              <a href="supdate.php?id=<?php echo $arraydata['id']; ?>"><button class='ed btn btn-outline-info btn-lg' data-bs-toggle="modal" data-bs-target="#edit"> <ion-icon name="create-outline"></ion-icon></button></a>
                <a onclick="return confirm('Are u sure to delete')" href="sdelete.php?id=<?php echo $arraydata['id']; ?>"> <button class='btn btn-outline-danger del btn-lg' data-bs-toggle="modal" data-bs-target="#delete"><ion-icon name="trash-outline"></ion-icon></button></a>
                 </div>
            
  </td>




 <tr>
 <?php
}}?>
 </table
 ?>
 <br>
 <strong><a href="stu_register2.php" class="btn btn-primary" >BACK</a></strong>
</center>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 
