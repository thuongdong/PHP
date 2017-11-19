<!DOCTYPE html>
<html>
<head>
	<title>PHP_Constants</title>
</head>
<body>
	<?php

	define("GREETING", "Welcome to W3Schools.com!");
	echo GREETING,"<br>";

	function myTest() {
    echo GREETING;
	}
 
	myTest();

	?>

</body>
</html>