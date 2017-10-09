<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Project-6 Form Handlers Homework</title>
</head>

<body>
<h1>WDV341 Intro HTML</h1>
<h3>Project-2b Form Handlers - Homework</h3>
<p>Complete the following exercises. When finished upload to your server. Update   your links on your WDV341 Homework page to include this assignment. Zip your work and attach it to your Blackboard assignment and submit it to Blackboard.</p>
<p>1. Given the form below create a PHP form handler that will create a confirmation page. The page should display all of the data from this form in the confirmation message. </p>
<p>2. Given the form below create a PHP form handler that will create a confirmation page that emails the form data to the customer.</p>

<?php

	echo "You have Successfully Registered! Thank you! <br />";
	echo "<fieldset>";
    echo "<legend>Customer Loyalty Registration</legend>";
	echo "<table width='60%' border='0'>";
	
	foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td width="17%">',$key,'</td>';
		echo '<td width="83%">',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "</fieldset>";


	$email = $_POST['cusEmail'];
	$from = 'dk@daniellekunze.com';
	$to = $email;
	$subject = 'Project 2b Customer Registration Confirmation';
	
	$body = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)
	{
		$body.= $key."=".$value."\n";
	} 

 	if (mail($to, $subject, $body, 'From: ' . $from)) 	//puts pieces together and emails
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>
</body>
</html>