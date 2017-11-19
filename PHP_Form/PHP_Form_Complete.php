<!DOCTYPE html>
<html>
<head>
	<title>PHP_Form_Complete</title>
	<style>
	.error {color: #FF0000;}	
	</style>
</head>
<body>
	<?php
	// define variables and set to empty values
	
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
			 // check if name only contains letters and whitespace
			 if (!preg_match("/^[a-zA-Z]*$/",$name)) {
			 	$nameErr = "Only letters and white space allowed"; 
			 }
			}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format"; 
			}
		}
		if (empty($_POST["website"])) {
			$website = "";
		} else {
			 $website = test_input($_POST["website"]);
			 // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			 if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				$websiteErr = "Invalid URL"; 
				}
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
	Name :     	<input type="text" name="name" value="<?php echo $name ;?>"><span class="error">* <?php echo $nameErr;?></span><br>
	Email :   	<input type="text" name="email" value="<?php echo $email ; ?>"><span class="error">* <?php echo $emailErr;?></span><br>
	Website : 	<input type="text" name="website" value="<?php echo $website ; ?>"><span class="error"><?php echo $websiteErr;?></span><br>
	Comment : 	<textarea name = "comment" rows="5" cols="40" ><?php echo $comment ; ?></textarea><br>
	Gender :	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="famale">Famale
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				<span class="error">* <?php echo $genderErr;?></span><br>

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