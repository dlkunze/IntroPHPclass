<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Presenters CMS Example</title>

<!-- This is an UPDATE form.  It will pull information for a specific presenter from the database.
	It will place the information from the database into the appropriate fields using PHP.
    The user/customer will see the form already filled out with the original information from the database.
    Any changes they make in the fields will be sent to the presenterUpdate.php page. That page will replace the 
    existing record with the values from this form.  Effectively erasing the original values and putting
    the new values into the table.
    
    The following steps are used for most updates:
    1. Connect to the database.
    2. Get the record id that was attached to the URL from the GET parameter.
    3. Create an SQL SELECT command to find the specific record that we want to modify.
    4. Run the query and check for any errors with the SELECT.  Most common is record not found.  
    5. Pull the column values for each field and use PHP to place them in the HTML default values depending upon the HTML element.
    6. The rendered page will be sent to the user/customer as HTML.  
    7. Once the user/customer has made their changes the submit will send the form and its name-value pairs to the
    	updatePresenters.php page which will update the database with the form information. 
-->
<?php

$updateRecId = $_GET['recId'];		//This comes from the viewPresenters link.  Much like the delete works

include '../dbConnect.php';			//connects to the database


//$updateRecId = 2;	//Hard code a key for testing purposes

$sql = "SELECT * FROM wdv341_events WHERE event_id = $updateRecId";	//Finds a specific record in the table

	//echo "<p>The SQL Command: $sql </p>"; 	//For testing purposes as needed.

//Run the SQL command against the database
$result = mysqli_query($link,$sql);
//Check the result to make sure it ran correctly
if (!$result)
{
	echo "<h1>You have encountered a problem with your update.</h1>";
	die( "<h2>" . mysqli_error($link) . "</h2>") ;		//This will display the error and then stop the page
}
$row = mysqli_fetch_array($result);		//Turn the result into an associative array so we can get the column values
?>


</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h1>Presenters CMS Example</h1>
<h3>UPDATE Form for Changing information on a Presenter</h3>
<p>This page is called from the selectEvents.php page when you click on the Update link of a presenter. That page attaches the event_id to the URL of this page making it a GET parameter.</p>
<p>This page uses that information to SELECT the requested record from the database. Then PHP is used to pull the various column values for the record and place them in the form fields as their default values. </p>
<p>The user/customer can make changes as needed or leave the information as is. When the form is submitted and validated it will send the form data to the the updateEvent.php page. The PHP page will update the record in the database.</p>
<p>Notice that this form uses a hidden field. The value of this hidden field contains the event_id. It is passed as one of the form name value pairs. The updateEvent.php page will use that value to update the selected record on the database.</p>
<form id="eventsForm" name="eventsForm" method="post" action="updateEvent.php">
  <p>Update the following Event Information.  Place the new information in the appropriate field(s)</p>
  <p>Event Name: 
    <input type="text" name="event_name" id="event_name" 
    	value="<?php echo $row['event_name']; ?>"/>	<!-- PHP will put the name into the value of field-->
  </p>
  <p>Event Description:  
    <input type="text" name="event_description" id="event_description" 
    	value="<?php echo $row['event_description']; ?>" />
  </p>
  <p>Event Presenter:  
    <input type="text" name="event_presenter" id="event_presenter" 
       	value="<?php echo $row['event_presenter']; ?>" />
  </p>
  <p>Event Date: 
    <input type="text" name="event_date" id="event_date" 
        value="<?php echo $row['event_date']; ?>" />
  </p>
  <p>Event Time: 
    <input type="text" name="event_time" id="event_time" 
    	value="<?php echo $row['event_time']; ?>" />
  </p>
  
  	<!--The hidden form contains the record if for this record. 
    	You can use this hidden field to pass the value of record id 
        to the update page.  It will go as one of the name value
        pairs from the form.
    -->
  	<input type="hidden" name="event_id" id="event_id"
    	value="<?php echo $updateRecId; ?>" />
  
  <p>
    <input type="submit" name="button" id="button" value="Update" />
    <input type="reset" name="button2" id="button2" value="Clear Form" />
  </p>
</form>
</body>
</html>
