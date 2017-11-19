<!DOCTYPE html>
<html>
<head>
	<title>PHP_Sorting_Array</title>
</head>
<body>
	<?php

	// sort sap xep theo thu tu bang chu cai
	$cars = array("Volvo", "BMW", "Toyota");
	sort($cars);
	$clength = count($cars);
	for($x = 0; $x < $clength; $x++) {
	    echo $cars[$x];
	    echo "<br>";
	}
	
	$numbers = array(4, 6, 2, 22, 11);
	sort($numbers);

	$nulength = count($numbers);
	for($x = 0; $x < $nulength; $x++) {
	    echo $numbers[$x];
	    echo "<br>";
	}
	// rsort sap xep theo thu tu nguoc bang chu cai
	$names = array("Thuong","DUc","Thien");
	rsort($names);
	$nlenght = count($names);
	for($x = 0; $x<$nlenght; $x++) {
		echo $names[$x];
		echo "<br>";
	}
	rsort($numbers);

	$arrlength = count($numbers);
	for($x = 0; $x < $arrlength; $x++) {
	    echo $numbers[$x];
	    echo "<br>";
	}
	// asort sap xep theo thu tu tang dan cua gia tri
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	asort($age);
	foreach ($age as $x => $x_value) {
		echo "Key = ".$x. "Value = ".$x_value;
		echo "<br>";
	}
	// arsort sap xep theo thu tu giam dan cua gia tri
	arsort($age);
	foreach ($age as $x => $x_value) {
		echo "Key = ".$x. ", Value = ".$x_value;
		echo "<br>";
	}
	// ksort sap xep thep thu tu tang dan, theo khoa
	ksort($age);
	foreach($age as $x => $x_value) {
    	echo "Key=" . $x . ", Value=" . $x_value;
    	echo "<br>";
	}
	// krsort sap xep theo thu tu giam dan , theo khoa
	krsort($age);
	foreach($age as $x => $x_value) {
    	echo "Key=" . $x . ", Value=" . $x_value;
    	echo "<br>";
    }

	?>

</body>
</html>