<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<link href='http://fonts.googleapis.com/css?family=Eagle+Lake' rel='stylesheet' type='text/css'>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ink and Edges Contact Form</title>
<link href="main.css" rel="stylesheet" type="text/css" />

<style type="text/css">

p{
	color:white;
	text-align:center;
}

table{
	margin-left:auto;
	margin-right:auto;
	color:white;
}
</style>
</head>

<body>

<div id="container">

<header><img src="images/inkbanner.jpg" width="770" height="270" alt="ink and edges banner"/>

<nav>
  <ul>
    <li><a href = "index.htm">Home</a></li>
    <li><a href = "contact.htm">Contact</a></li>
    <li><a href = "pens.htm">Pens</a></li>
    <li><a href = "sharpening.htm">Sharpening</a></li>
    <li><a href = "pricing.htm">Pricing</a></li>
  </ul>
</nav>

<h2>Thank you</h2>
<p>Thank you for your interest in Ink and Edges. Please allow 24 to 48 hours for a reply.</p><p>I look forward to speaking with you soon.</p>
<br />
<h6>Below is the form that was submitted. A copy will be sent to the email address you provided.</h6>
<br />


<?php

	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

date_default_timezone_set('America/Chicago');

echo date('l jS \of F Y h:i:s A');

	$body = "Your form was submitted on: " . date('l jS \of F Y h:i:s A') . "\n\n" . "Please allow 24 to 48 hours for a reply. I look forward to speaking with you soon. \n\n" ;			
	foreach($_POST as $key => $value)
	{
		$body.= $key."=".$value."\n";
	} 

	$email = $_POST['email'];
	$from = 'william@inkandedges.com';
	$to = 'william@inkandedges.com' . ', ';
	$to .= $email;
	$subject = "Ink and Edges form request";
	
	
 	if (mail($to, $subject, $body, 'From: ' . $from)) 	
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}
	


?>


</section> <!-- end container -->

</body>
</html>
