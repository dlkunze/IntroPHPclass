<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Danielle's PHP Project 1b</title>

<?php

$courseName="WDV 341 Intro to PHP";

$firstName="Danielle";

$lastName="Kunze";

$hwPage="<a href=http://daniellekunze.com/Intro%20to%20PHP/wdv341.php>Danielle's WDV 341 Homework Page</a>"

?>
</head>

<body>

<p>1. Use this page as the source and conver it so that it will process your PHP code on the server.</p>
<p>2. Use PHP to fill in the following information. </p>
		<p>Course Name: <?php echo $courseName ; ?> </p>
		<h2>First Name: <?php echo $firstName ; ?></h2>
		<h2>Last Name: <?php echo $lastName ; ?></h2>
		<p>My homework is located at: <?php echo $hwPage ; ?> </p>
<h3>&nbsp;</h3>
<p>3. Create an ordered list using PHP. Place it in the area below. It should describe the sequence of steps that the server and PHP processor performs when you request this page until you see the results. The more detailed the better!</p>

<?php print 
		"<ol>
			<li>The Client gathers information and sends the Request Object to the server.</li>
			<li>The server uses information from the client and locates the requested file.</li>
			<li>PHP code is then sent to the PHP processor to be processed, while HTML, CSS & Javascript are sent to the Response Object.</li>
			<li>The PHP processor outputs results in HTML, CSS & Javascript and sends that to the Response Object as well.</li>
			<li>The Response Object is sent to the client, which is then read by the Browser and is displayed on the client.</li>
		<ol>"

?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Grading:</p>
<p> Each exercise is graded seperately and totaled for the Project grade. Each exercise will be graded using the following scale. Exercises 2 and 3 are worth 10 points each.</p>
<table width="530" border="1">
  <tr>
    <td width="138">Grade</td>
    <td width="376">Expectation</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Works as expected. Correctly uses concepts presented in class. Documented as needed and well formatted.</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Works as expected. Uses some of the concepts presented in class. Lacks documentation if needed or poorly formatted/structured.</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Produces results but not as expected OR Exercise is attempted but produces an error.</td>
  </tr>
  <tr>
    <td>0</td>
    <td>Does not produce any results. Fails to use any concepts presented in class or not attempted.</td>
  </tr>
</table>

</body>
</html>