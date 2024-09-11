<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "basic");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
		$rollnumber = $_REQUEST['rollnumber'];
		$stdname = $_REQUEST['stdname'];
		$branch = $_REQUEST['branch'];
		$companyreg = $_REQUEST['companyreg'];
		$date = $_REQUEST['date'];
			
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO brands VALUES ('$id','$rollnumber',
			'$stdname','$branch','$companyreg','$date')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$id\n$rollno\n $stdname\n "
				. "$branch\n $company\n $date");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
