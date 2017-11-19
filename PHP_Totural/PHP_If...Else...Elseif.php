<!DOCTYPE html>
<html>
<head>
	<title>PHP_If_else_elseif</title>
</head>
<body>
	 <?php

	$t = date("H"); // date("H") tra thoi gian hien tai
	echo "<p>The hour (of the server) is " . $t;
	echo ", and will give the following message:</p>";

	if ($t < "12") {
    	echo "Have a good morning!";
	} elseif ($t < "20") {
	    echo "Have a good day!";
	} else {
	    echo "Have a good night!";
	}


	?>

</body>
</html>