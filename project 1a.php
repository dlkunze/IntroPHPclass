<!doctype html>
<html>
<head>
<meta charset="utf-8">
<titleDanielle's PHP Project 1</title>
</head>

<body>

<p>1. Create a PHP page called project1. This will be a PHP page. Do all of the following work on that page. </p>
<p>2. Use an echo command to display your name below this line. It should be within an &lt;h1&gt; element.</p>

<h1><?php echo "Danielle" ?></h1>


<p>3. Use a print command to display your name below this line. It should be within an &lt;h1&gt; element. </p>

<?php print "<h1>Danielle</h1>" ?>

<p>4. Use an echo command to put your name inside the following line where the word <strong>yourName</strong> appears. </p>

<?php $yourName="Danielle!"; ?>

<h2>Hi <?php echo $yourName ?> Welcome to WDV341 Intro to PHP</h2>

<p>5. Use one or more echo commands to write out an unordered list that contains the following: red, green, blue.</p>

<?php

	echo "<ul>
			<li>red</li>
			<li>green</li>
			<li>blue</li>
		  </ul>";

?>
</body>
</html>