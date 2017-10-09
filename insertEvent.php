<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Into PHP  - insertEvent</title>

<style type="text/css">

body{
background-image: url(background.jpg);
font-size:36px;
color:white;
text-align:center;
}




</style>

<?php

$dbc = mysqli_connect('localhost', 'dlkunze_wdv341', 'wdv341', 'dlkunze_wdv341');	//connects to the database

$event_name = $_POST['event_name'];
$event_description = $_POST['event_description'];
$event_presenter = $_POST['event_presenter'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];


$query = "INSERT INTO wdv341_events (event_name, event_description, event_presenter, event_date, event_time) " .
			"VALUES ('$event_name', '$event_description', '$event_presenter', '$event_date', '$event_time')";	


$result = mysqli_query($dbc, $query)
			or die('Error querying database' . mysqli_error($dbc));
			
mysqli_close($dbc);
	
echo 'Thanks for submitting your form. <br />';
echo 'Your event is ' . $event_name;
echo ' presented by ' . $event_presenter . '<br />';
echo 'Your event is on ' . $event_date . ' at ' . $event_time . '<br />';
echo 'We will be in contact soon and look forward to your event. Have a great day!';			
?>



</head>
</html>

