<?php error_reporting(0);?>   
<?php
 $conn = mysqli_connect("localhost","root","", "basic");
    $db= $conn;
    $tableName="nin";
    $columns= ['id','roll','name','branch','percentage','backlogs'];
    $fetchData = fetch_data($db, $tableName, $columns);
    
    function fetch_data($db, $tableName, $columns){
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

     <html>
      <body> 
        
        <table border="1px" cellspacing="10px" cellpadding="10px">
           <thead>
    
             <th>id</th>
             <th>Rollnumber</th>
             <th>StudentName</th>
            

             <th>Branch</th>
             <th>Percentage</th>
             <th>Backlogs</th>

             
            
             
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
          
          <td><?php echo $data['branch']??''; ?></td>
          <td><?php echo $data['percentage']??''; ?></td>
          <td><?php echo $data['backlogs']??''; ?></td>
          <td><a href="supdate.php?id=<?php echo $data['id'];?>"href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-edit"></span></a>
         <!-- <td><a onclick="return confirm('Are u sure to delete')" href="sdelete.php?id=<?php echo $data['id'];?>">delete</a> -->  
         <td><a onclick="return confirm('Are u sure to delete')" href="sdelete.php?id=<?php echo $data['id']; ?>href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-trash"></span></a>
            
          
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
   
        

                           
                         </body>
                        
                         </html>