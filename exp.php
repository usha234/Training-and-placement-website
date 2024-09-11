<script>
  function add_field()
  {
    var total_text=document.getElementsByClassName("input_text");
    total_text=total_text.length+1;
    document.getElementById("field_div").innerHTML=document.getElementById("field_div").innerHTML+
    "<p id='input_text"+total_text+"_wrapper'><input type='text' class='input_text' name='round1' id='input_text"+total_text+"' placeholder='Enter'><input type='button' value='Remove' onclick=remove_field('input_text"+total_text+"');></p>";
  }
  function remove_field(id)
  {
    document.getElementById(id+"_wrapper").innerHTML="";
  }
  </script>
  <style>
  
  
  input[type="button"]
  {
    background:none;
    color:white;
    border:none;
    width:110px;
    height:35px;
    border-radius:3px;
    background-color:blue;
    font-size:16px;
  }
  </style>
  
  <div id="wrapper">
  <div id="field_div">
  <input type="button" value="Add" onclick="add_field();">
  </div>
  </div>












  <?php
// Establish a connection to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli('localhost', 'root','', 'basic');

// Retrieve data from the table
$sq = "SELECT DISTINCT round FROM round";
$resul = $conn->query($sq);



// Populate the dropdown



echo "<select name='round' class ='form-control'>";
echo "<option> choose the round </option>";
while ($row2 = $resul->fetch_assoc()) {
    echo "<option value='" . $row2['round'] . "'>" . $row2['round'] . "</option>";
}
echo "</select>";

echo nl2br("\n");






?>