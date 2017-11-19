<!DOCTYPE html>
<html>
<head>
	<title>PHP_DateandTime</title>
</head>
<body>
	<?php
	// Set a timezone to use
	date_default_timezone_get("Ha noi");

	echo "Today is " . date("Y/m/d") . "<br>";
	echo "Today is " . date("Y.m.d") . "<br>";
	echo "Today is " . date("Y-m-d") . "<br>";
	echo "Today is " . date("l") ."<br>";
	echo "The time is ".date("h:i:sa")."<br>";
	//
	$d=mktime(22, 58, 25, 19, 11, 2017);
	// Creates a date and time from a number of parameters in the mktime() function
	echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
	// Creates a date and time from the strtotime() function
	$d=strtotime("11:00pm November 19 2017");
	echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	$d=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$startdate=strtotime("Saturday");
	$enddate=strtotime("+6 weeks", $startdate);

	while ($startdate < $enddate) {
  		echo date("M d", $startdate) . "<br>";
  		$startdate = strtotime("+1 week", $startdate);
	}

	$d1=strtotime("November 22");
	$d2=ceil(($d1-time())/60/60/24);
	echo "There are " . $d2 ." days until 22th of November."."<br>";
	
	?>

	&copy; 2010-<?php echo date("Y"); // Use the date() function to automatically update the copyright year on your website
	?>

</body>
</html>