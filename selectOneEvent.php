<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Into PHP  Select from Where</title>
<?php
	include '../dbConnect.php';				//connects to the database

	$sql = "SELECT * FROM wdv341_events WHERE event_name = 'SupernaturalCon'";		//build the SQL query
						//Note the WHERE clause allows us to select ONLY the desired record
		
	$result = mysqli_query($link,$sql);		//run the Query and store the result in $result

	if(!$result )							//Make sure the Query ran correctly and created result
	{
		echo "<h1 style='color:red'>Houston, We have a problem!</h1>";	//Problems were encountered.
		echo mysqli_error($result);		//Display error message information
	}
?>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Select & Display WHERE</h2>

<?php
	echo "<h3>" . mysqli_num_rows($result). " records were found.</h3>";	//display number of rows found by query
?>
<div>
	<table border="1">
	<tr>
		<th>Event Name</th>
		<th>Event Description</th>
		<th>Event Presenter</th>
		<th>Event Date</th>
		<th>Event Time</th>
	</tr>    
<?php
	
	while($row = mysqli_fetch_array($result))		//Turn each row of the result into an associative array 
  	{
		//For each row you found int the table create an HTML table in the response object
  		echo "<tr>";
  		echo "<td>" . $row['event_name'] . "</td>";
  		echo "<td>" . $row['event_description'] . "</td>";
  		echo "<td>" . $row['event_presenter'] . "</td>";
  		echo "<td>" . $row['event_date'] . "</td>";
  		echo "<td>" . $row['event_time'] . "</td>";
  		echo "</tr>";
  	}

	mysqli_close($link);		//Close the database connection to free up server resources.
?>
	</table>
</div>	
</body>
</html>