<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Into PHP  - Presenters CMS Example</title>

<?php

include '../dbConnect.php';	//connects to the database

//Get the name value pairs from the $_POST variable into PHP variables
//For this example I am using PHP variables with the same name as the name atribute from the HTML form
$event_name = $_POST['event_name'];
$event_description = $_POST['event_description'];
$event_presenter = $_POST['event_presenter'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$event_id = $_POST['event_id'];			//from the hidden field of the update form

?>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Presenters CMS Example</h2>
<h3>UPDATE Record Process</h3>
<p>This page is called from the eventsUpdateForm.php using the form's action attribute. This page will pull the form data from the $_POST array into PHP variables. </p>
<p>It will then build the SQL UPDATE query using the PHP variables. The query will overwrite the existing fields in the database with the new values provided by the form. </p>
<p>If the query processes correctly this page will display a confirmation message to the user/customer. If not, this page will display an error message to the user/customer. </p>
<p>Note: In a production environment this error message should be user/customer friendly. Additional information should be sent to the developer so that they can see what happened when they attempt to fix it. </p>
<?php
//Create the SQL UPDATE query or command  
	$sql = "UPDATE wdv341_events SET " ;
	$sql .= "event_name='$event_name', ";
	$sql .= "event_description='$event_description', ";
	$sql .= "event_presenter='$event_presenter', ";
	$sql .= "event_date='$event_date', ";
	$sql .= "event_time='$event_time' ";			//NOTE last one does NOT have a comma after it
	$sql .= " WHERE (event_id='$event_id')";		//VERY IMPORTANT  Only update the requested record id
	
	echo "<h3>$sql</h3>";			//testing

if (mysqli_query($link,$sql) )
{
	echo "<h1>Your record has been successfully UPDATED the database.</h1>";
	echo "<p>Please <a href='viewPresenters.php'>view</a> your records.</p>";
}
else
{
	echo "<h1>You have encountered a problem.</h1>";
	echo "<h2 style='color:red'>" . mysqli_error($link) . "</h2>";
}
mysqli_close($link);	//closes the connection to the database once this page is complete.
?>

</body>
</html>