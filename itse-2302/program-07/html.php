<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever html.php</title>
		<link href="program-07.css" rel="stylesheet">
	</head>

	<body>
	
		<h1>html.php</h1>
			
		<hr>
		
		<h2>Requirement #07</h2>
		
		<?php
			$color = $bday = $email = $quantity = $points = ""; // Initiating all values to null
			
			if($_SERVER["REQUEST_METHOD"]=="POST") {
				$color = validate_input($_POST["favcolor"]);
				$email = validate_input($_POST["email"]);
				$quantity = validate_input($_POST["quantity"]);
				$points = validate_input($_POST["points"]);
				$bday = validate_input($_POST["bday"]);
			}
			
			function validate_input($data) {
    			$data = trim($data);
    			$data = stripslashes($data);
    			$data = htmlspecialchars($data);
    			return $data;
			}
		?>
		
		<h2>Your Input:</h2>
		Favorite Color (in hexadecimal notation): 
		<?php echo $_POST["favcolor"];?><br>
		E-mail: <?php echo $_POST["email"];?><br>
		Quantity: <?php echo $_POST["quantity"];?><br>
		Points: <?php echo $_POST["points"];?><br>
		Birthday: <?php echo $_POST["bday"];?><br>
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="index.php">Return to previous page</a></p>
			</div>
		</footer>
	</body>
</html>