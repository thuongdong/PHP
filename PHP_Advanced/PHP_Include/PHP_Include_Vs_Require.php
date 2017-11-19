<!DOCTYPE html>
<html>
<head>
	<title>PHP_Include_Vs_Require</title>
</head>
<body>

<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php'; 	// PHP khong tim thay tep , cau lenh van duoc thuc thi
echo "I have a $color $car.";
?>

<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php'; 	// PHP khong tim thay tep , cau lenh khong duoc thuc thi
echo "I have a $color $car.";
?>

</body>
</html>