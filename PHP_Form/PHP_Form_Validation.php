<!DOCTYPE html>
<html>
<head>
	<title>PHP_Form_Validation</title>
</head>
<body>

	<?php
	// xac dinh cac bien va thiet la gia tri rong
	$name = $email = $gender = $comment = $website = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = test_input($_POST["name"]);
	  $email = test_input($_POST["email"]);
	  $website = test_input($_POST["website"]);
	  $comment = test_input($_POST["comment"]);
	  $gender = test_input($_POST["gender"]);
	}
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	?>

	<h2>PHP Form Validation Example</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	Name :     	<input type="text" name="name"><br>
	Email :   	<input type="text" name="email"><br>
	Website : 	<input type="text" name="website"><br>
	Comment : 	<textarea name = "comment" rows="5" cols="40"></textarea><br>
	Gender :	<input type="radio" name="gender" value="famale"> Famale
				<input type="radio" name="gender" value="male"> Male<br>
	<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	echo "<h2>Your input<h2>";
	echo $name , "<br>";
	echo $email , "<br>";
	echo $website , "<br>";
	echo $comment , "<br>";
	echo $gender , "<br>";
	?>

</body>
</html>