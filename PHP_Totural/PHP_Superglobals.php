<!DOCTYPE html>
<html>
<head>
	<title>PHP_Superglobals</title>
</head>
<body>

	<?php
	$x = 10;
	$y = 90;
	function addition() {
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	addition();
	echo "$z<br>";

	echo $_SERVER['PHP_SELF']; // tra ve ten tep cua tep dang thuc thi
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];// tra ve ten may chu luu tru
	echo "<br>";
	echo $_SERVER['HTTP_HOST']; // tra ve tieu de may chu hien tai
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];// tra lai URL day du cua trang hien tai
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];// tra ve duong dan
	echo "<br>";
	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  		Name: <input type="text" name="fname">
  		<input type="submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	// thu thap gia tri cua truong vao
    	$name = $_REQUEST['fname'];
    	if (empty($name)) {
        	echo "Name is empty";
    	} else {
        	echo $name;
    	}
	}
	?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  		Name: <input type="text" name="fname">
  		<input type="submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	// thu thap gia tri cua truong vao
    	$name = $_POST['fname'];
    	if (empty($name)) {
    	    echo "Name is empty";
    	} else {
    	    echo $name;
    	}
	}
	?>

</body>
</html>