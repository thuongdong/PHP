<!DOCTYPE html>
<html>
<head>
	<title>PHP_Echo_Print.php</title>
</head>
<body>
	<?php
		$txt1 = "Learn PHP";
		$txt2 = "W3Schools.com";
		$x = 5;
		$y = 4;

		echo "<h2>" . $txt1 . "</h2>";
		echo "Study PHP at " . $txt2 . "<br>";
		echo $x + $y;

		print "<h2>" . $txt1 . "</h2>";
		print "Study PHP at " . $txt2 . "<br>";
		print $x + $y;
	?>
</body>
</html>