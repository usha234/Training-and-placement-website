<!-- <?php
// $con = mysqli_connect("localhost","root","","basic");
//             //$c="SELECT distinct roll from qualified";
//             //$s=mysqli_query($conn,$c);
//             $e='select * from tatarounds';
//              $p=mysqli_query($con,$e);

//             foreach($p as $k)
//             {

//                 $l=$k["Rounds"];
//                   echo $l;
//                   break;

//             }

            

//             $c=$_POST["brandslist"];
//             foreach($c as $r)
//             {
//               $s="insert into tata($l) values ('$r')";
//               $e=mysqli_query($con,$s);
//             }

        

//             foreach($p as $k)
//             {
//                 $b=$k['Rounds'];
//                $g="select distinct $b from tata";
//                $m=mysqli_query($con,$g);
//                if (mysqli_num_rows($m) > 0) {
//                 $sn = 1;
//                 foreach ($m as $brand) {
//                   // $str= $brand['roll']. "-" .$brand['name'] . "-" .$brand['percentage'] . "-" .$brand['backlogs'] ;
//                     if($brand[$b]!=null){
//                        $str=$brand[$b];
                    
            
//                   ?>
//                   <input type="checkbox" name="brandslist[]" value="

<br>
//              <?php
//              }
//             }

//             }
            


//         }
//             ?>
             <form action="test2.php" method="POST">
                <input type="submit"></input>
             </form>






  <input type="button" onclick="refresh()"> -->



<?php
// $con = mysqli_connect("localhost","root","","basic");
            

//   $e='select * from sumantechnologyrounds';
//   $p=mysqli_query($con,$e);
  //for loop for frist round name
    //  foreach($p as $k)
    //   {
    //    $l=$k["Rounds"];
    //    echo $l;
    //    break;
    //    }
    //   $c=0;

      //for loop for second round name
      // foreach($p as $k)
      // {
      //  $h=$k["Rounds"];
      //   echo $h;
      //   $c++;
      //   if($c==2){
      //     break;
      //      }
      //   }

            //insertion in 1st round

      // $c=$_POST["brandslist"];
      // foreach($c as $r)
      //  {
      //    $s="insert into tata($l) values ('$r')";
      //    $e=mysqli_query($con,$s);
      //  }

        
//check box for second code
            // foreach($p as $k)
            // {
            //     $b=$k['Rounds'];
            //    $g="select distinct $b from tata";
            //    $m=mysqli_query($con,$g);
            //    if (mysqli_num_rows($m) > 0) {
            //     $sn = 1;
            //     foreach ($m as $brand) {
                  // $str= $brand['roll']. "-" .$brand['name'] . "-" .$brand['percentage'] . "-" .$brand['backlogs'] ;
            //       if($brand[$b]!=null){
            //            $str=$brand[$b];
                    
            
            //       ?>
            <!-- //       <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br>
            //       <input type="text" style="display:none" value="$b" name="fr">
            //        -->
            <!-- //       <input type="text" style="display:none" value="$h" name="se">  -->
            //  <?php
            //  }
            // }

            // }
            


        // }
        //     ?>
        <!-- //      <form action="t.php" method="POST">
        //         <input type="submit"></input>
        //      </form> -->






<!-- <input type="button" onclick="refresh()"> -->








<?php
session_start();
$con = mysqli_connect("localhost","root","","basic");
if(isset($_POST['submit']))
{
     $brandlist = $_POST['brandslist'];
     
    
    foreach($brandlist as $branditems)
    { 
        // echo $branditems."<br>";
        $arraydata = explode("-",$branditems);
       // print_r($arraydata);

        $query = "INSERT INTO qualifiedround (id,roll,name,nc,branch,ac,roundqualified) VALUES ('$arraydata[0]','$arraydata[1]','$arraydata[2]','$arraydata[3]','$arraydata[4]','$arraydata[5]','aptitude')";
        $query_run = mysqli_query($con, $query);
    }
  
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: test.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: test.php");
    }
}
?>