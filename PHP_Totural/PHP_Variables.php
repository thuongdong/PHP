<!DOCTYPE html>
<html>
<head>
	<title>PHP_Variable</title>
</head>
<body>

	<?php
		$x = 10;
		$z = 5;
		function myTest() {
			$y = 0;
			echo "<h2>Variables x inside function is : $x</h2>";
			echo "<h2>Variables y inside function is : $y</h2>";
			global $x, $z;
			$GLOBALS['z'] = $GLOBALS['z'] + $GLOBALS['z'];
			$x = $x + $z; 
			static $k = 0;
			echo $k;
			$k++;
		}
		myTest();
			echo "<p>Variables x inside function is :$x</p>";
			echo "<p>Variables y inside function is :$y</p>";
			echo "<p>$x</p>";
			echo "$z";
		myTest();
		echo "<br>";	
		myTest();
		echo "<br>";
	?>

</body>
</html>