<!DOCTYPE html>
<html>
<head>
	<title>PHP_Strings</title>
</head>
<body>
	<?php

	echo strlen("Hello World!"); // do dai chuoi
	echo "<br>";
	echo str_word_count("Hello world"); // so tu trong chuoi
	echo "<br>";
	echo strrev("Hello World"); // dao nguoi chuoi
	echo "<br>";
	echo strpos("Hello world!", "world"); // tim kiem "world" trong "Hello World"
	echo "<br>";
	echo str_replace("world", "Dolly", "Hello world!"); // thay the "World " bang "Dolly" trong "Hello World"

	?>

</body>
</html>