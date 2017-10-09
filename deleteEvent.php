<?php

	$deleteRecId = $_GET['recId'];		//Pull the presenter_id from the GET parameter

	include '../dbConnect.php';		//connects to the database

?>

<body>

<h1>WDV341 Intro PHP </h1>
<h2>Presenters CMS Example</h2>
<h3>DELETE Record Page</h3>
<p>This page is called from the viewPresenters.php page when the user/customer clicks on the Delete link. This page will use the presenter_id that has been passed as a GET parameter on the URL to this page. </p>
<p>The SQL DELETE query will be created. Once the query is processed this page will confirm that it processed correctly. It will display a confirmation to the user/customer if it worked correctly or it will display an error message if there were problems.</p>
<p>Note: In a production environment this error message should be user/customer friendly. Additional information should be sent to the developer so that they can see what happened when they attempt to fix it. </p>
<?php

echo "<h2>Please delete record number: " . $_GET['recId'] . "</h2>";	//Display a message verifying the record to be deleted.  This could be turned into a second confirmation

$sql = "DELETE FROM wdv341_events WHERE event_id = $deleteRecId";
	//echo "<p>The SQL Command: $sql </p>";     //testing
	
if (mysqli_query($link,$sql) )					//process the query
{
	echo "<h1>Your record has been successfully deleted.</h1>";
	echo "<p>Please <a href='../Project 7 PHP Select and Display/selectEvents.php'>view</a> your records.</p>";	
}
else
{
	echo "<h1>You have encountered a problem with your delete.</h1>";
	echo "<h2 style='color:red'>" . mysqli_error($link) . "</h2>";
}

mysqli_close($link);		//close the database connection and free up server resources
?>
</body>
</html>

