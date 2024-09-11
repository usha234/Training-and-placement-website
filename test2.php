<?php
$con = mysqli_connect("localhost","root","","basic");
            
$c=0;
//for loop for round table
$s="SELECT Rounds FROM ";
$u=mysqli_query($con,$s);
$yt="Select count(*) from tatarounds";
$ut=mysqli_query($con,$yt);
foreach($u as $k){
    echo $k["Rounds"];
    $w=$k['Rounds'];
  
    //query from round table names with out null values
    //$w is round name for selecting
     $r="SELECT distinct ".$w." FROM tata";
    $m=mysqli_query($con,$r);
      // foreach($m as $x){
      //   echo $x['$w'];
      // }
            


    
    if (mysqli_num_rows($m) > 0) {
      $c++;
      foreach ($m as $brand) {
        // $w=$k['Rounds'];
         echo $brand[$w]."<br>"; 
        $z=$w;
        }
      }
        else{
          $c++;
          //$z is previous round name
          $m="Select $z from tata";
          $m1=mysqli_query($con,$m);
        foreach ($m1 as $brand) {
          $str=$brand[$z];
            ?>
            <input type="checkbox" name="brandslist[]" value="<?= $str ?>"><?= $str ?><br>
            <!-- name of present round name that has to insert $w -->
           <input type="text" style="display:none" value="$w" name="pe">
           <!-- name of the previous round name has values -->
           <input type="text" style="display:none" value="$z" name="pr">
            <?php
  
          }
          if($c!=$ut){
        ?>
             <form action="t1.php" method="POST">
                <input type="submit"></input>
             </form>  
<?php
          }
          else{
            ?>
             <form action="t11.php" method="POST">
                <input type="submit"></input>
             </form>  
             <?php
          }
break;
        }
      }