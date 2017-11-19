<!DOCTYPE html>
<html>
<head>
	<title>PHP_Operators.php</title>
</head>
<body>

	<?php

	$x = 20;
	$y = 9;
	echo $x + $y, "<br>";
	$x += 100;
	echo "$x","<br>";
	$z = "100";
	var_dump($x == $z); // tra ve true boi vi cac gia tri bang nhau
	var_dump($x === $z); //tra ve false vi cac kieu khong bang nhau

	?>

</body>
</html>