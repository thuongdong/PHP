<!DOCTYPE html>
<html>
<body>

<?php
	$x = 10.365;
	var_dump($x);
	echo "<br>";
	$cars = array("Volvo","BMW","Toyota");
	var_dump($cars);
	echo "<br>";
	class Car {
    function Car() {
        $this->model = "VW";
    	}
	}
	// tao mot doi tuong
	$herbie = new Car();

	// hien thi thuoc tinh doi tuong
	echo $herbie->model;
	echo "<br>";

	$y = "Hello World";
	$y = null;
	var_dump($y);

?>

</body>
</html>	