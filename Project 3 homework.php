<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danielle's PHP Date Handling Homework</title>
</head>

<body>
<h1>PHP Date Handling</h1>

<h2>Homework</h2>

<p>1.  Create a date object with the value of 7/1/2014.</p>
<br />
<p>Hint: Use the date_create function and follow it to the DateTime process</p>
<p>Create the date object using the Object Oriented process.</p>

<?php
	$date = new DateTime('7/1/2014');
	echo $date->format('l F d, Y');
?>
<p>Create the date object using the Procedural process.</p>
<?php

	$date=date_create('7/1/2014');
	echo date_format($date, 'l F d, Y');

?>
<br />
<p>2. Display the date object you created in part 1. above in the following formats.</p>

<p>mm/dd/yyyy</p><?php $date = new DateTime('7/1/2014'); echo $date->format('m/d/Y'); ?>

<p>dd/mm/yyyy</p><?php $date = new DateTime('7/1/2014'); echo $date->format('d/m/Y'); ?>
<p>Monday September 1, YYYY</p>
<?php
	$date = new DateTime('7/1/2014');
	echo $date->format('l F d, Y');
?>

<br />
<p>3. Find and display the difference between the current date and the date you created in part 1.</p>
<?php

	$date1 = new DateTime('now');
	$date2 = new DateTime('7/1/2014');
	$interval = date_diff($date1, $date2);

	echo $interval->format('%d days');

?>
<br />
<p>4. Create a date object with a value of 9/1/2014.</p>
<p>Hint: Use the date_create function and follow it to the DateTime process</p>
<p>Create the date object using the Object Oriented process.</p>
<?php
	$date = new DateTime('9/1/2014');
	echo $date->format('l F d, Y');
?>

<p>Create the date object using the Procedural process.</p>
<?php

	$date=date_create('9/1/2014');
	echo date_format($date, 'l F d, Y');

?>

<p>5. Find and display how many hours have passed between the current date/time and the 9/1/2014 date.</p>
<?php

	$date1 = new DateTime('9/1/2014');
	$date2 = new DateTime('now');
	$interval = $date1->diff($date2);

	echo $interval->format('%h hours');

?>
<br />
<br />
<br />
</body>
</html>