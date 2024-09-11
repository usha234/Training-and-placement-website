<?php 
 $con = mysqli_connect("localhost","root","", "basic");
 ?>

<table border="1px" cellspacing="10px" cellspacing = "0">
           <thead>
    
             <th>id</th>
             <th>Branch</th>
             <th colspan="2" align="center">Operation</th>

             
             <?php 
             $query="select * from branch";
             $data = mysqli_query($con,$query);
             $result=mysqli_num_rows($data);

             
        if($result){
            while($row = mysqli_fetch_array($data)){
               ?>
               <tr>
               <td><?php echo $row['id'];?>
                <td><?php echo $row['branch'];?>
            
                <!--
                <td>
                <a href="update.php?id= class="link-dark"><i class="fa-solid fa-pen-to-square 
                                fs-5 me-3"></i>
                                <a href="delete.php?id=" class="link-dark" onclick='return checkdelete()'><i class="fa-solid fa-trash 
                                fs-5"></i></a>
                            </td>

            -->
            
                <td><a href="bupdate.php?id=<?php echo $row['id'];?>">edit</a>
                <td><a onclick="return confirm('Are u sure to delete')" href="bdelete.php?id=<?php echo $row['id']; ?>">delete</a>


            </td>
        
               </tr>
               <script>
    function checkdelete(){
        return Confirm('Are you sure you want to delete this Record');
    }
  </script>
   
               <?php
        }
    }
    else{

    }
   