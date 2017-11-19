<!DOCTYPE html>
<html>
<head>
	<title>PHP_Funtions</title>
</head>
<body>
	<?php

	function writeMsg() {
	    echo "Hello world!<br>";
	}
	writeMsg(); // goi ham

	function familyName($fname) {
	    echo "$fname Refsnes.<br>";
	}
	familyName("Jani");
	familyName("Hege");
	familyName("Stale");
	familyName("Kai Jim");
	familyName("Borge");

	function setHeight($minheight = 50) {
    	echo "The height is : $minheight <br>";
	}
	setHeight(350);
	setHeight(); // su dung gia tri mac dinh la 50
	setHeight(135);
	setHeight(80);

	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}
	echo "5 + 10 = ". sum(5,10)."<br>";

	?>

</body>
</html>