<!DOCTYPE html>
<html>
<head>
	<title>PHP_Required_Fields</title>
</head>
<body>
	<?php
	// xac dinh cac bien va thiet la gia tri rong
	$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {	
			 $name = test_input($_POST["name"]);
			}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
		}
		if (empty($_POST["website"])) {
			$website = "";
		} else {
			 $website = test_input($_POST["website"]);
			}
		if (empty($_POST["comment"])) {
			$comment = "";
		} else {
			$comment = test_input($_POST["comment"]);
			}
		if (empty($_POST["gender"])) {
			$genderErr = "Gender is required";
		} else {
			$gender = test_input($_POST["gender"]);
			}
	}

	?>

	<h2>PHP Form Validation Example</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	Name :     	<input type="text" name="name"><span class="error">* <?php echo $nameErr;?></span><br>
	Email :   	<input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span><br>
	Website : 	<input type="text" name="website"> <span class="error"><?php echo $websiteErr;?></span><br>
	Comment : 	<textarea name = "comment" rows="5" cols="40"></textarea><br>
	Gender :	<input type="radio" name="gender" value="famale"> Famale
				<input type="radio" name="gender" value="male"> Male<span class="error">* <?php echo $genderErr;?></span><br>
	<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	echo "<h2>Your input<h2>";
	echo $name , "<br>";
	echo $email , "<br>";
	echo $website ,"<br>";
	echo $comment , "<br>";
	echo $gender , "<br>";
	?>
</body>
</html>