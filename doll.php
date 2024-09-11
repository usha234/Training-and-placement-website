


































</form>
    </div>
    <?php
        $conn = mysqli_connect("localhost", "root","", "basic");
        if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }
      ?>
      <center>
      
    
    
    <table border='1'>
    
    <thead>
           <th>Rollno.</th>
           <th>Name</th>
           <th>Percentage</th>
    
    </thead>
    
    <?php
    
      
      $query  = "Select roll,name,percentage from nin,company,map where company.date=map.date and map.branch=nin.branch";
      $result = mysqli_query($conn, $query) or die("error".mysqli_error($conn));
    
     if (mysqli_num_rows($result) > 0) {
       while ($Row = mysqli_fetch_assoc($result)) {
        
        
    
    ?>
  
    <tr>
           <td> <p class="card-text"><?php  echo $Row['roll'] ?></p></td>
           <td> <p class="card-text"><?php  echo $Row['name'] ?></p></td>
            <td><p class="card-text"><?php  echo $Row['percentage'] ?></p></td>
    </tr>       
        
    <?php
    
       }
      }        
    ?>  
    </table> 
    

        </center>
        </body>
        </html>
