<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever favorites.php</title>
		<link href="program-07.css" rel="stylesheet">
	</head>

	<body>
	
		<h1>favorites.php</h1>
			
		<hr>
		
		<h2>Requirement #05</h2>

		<?php
			// Initiating all values to null
			$name = $movie = $food = $season = $comments = "";
		
			if($_SERVER["REQUEST_METHOD"] == "POST") {
        		$name = validate_input($_POST["name"]);
        		$movie = validate_input($_POST["movie"]);
        		$food = validate_input($_POST["food"]);				
    			$season = validate_input($_POST["season"]);
    			if (empty($_POST["comments"])) {
    				$comments = "";
  				} else {
    				$comments = validate_input($_POST["comments"]);
  				}
  			}
    		
			function validate_input($data) {
    			$data = trim($data);
    			$data = stripslashes($data);
    			$data = htmlspecialchars($data);
    			return $data;
			}	
		?>
		
		<h2>Your Input:</h2>
		Your name: <?php echo $_POST["name"];?><br>
		Your favorite movie: <?php echo $_POST["movie"];?><br>
		Your favorite food: <?php echo $_POST["food"];?><br>
		Your favorite season: <?php echo $_POST["season"];?><br>
		Your comments: <?php echo $_POST["comments"];?>		
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="index.php">Return to previous page</a></p>
			</div>
		</footer>
	</body>
</html>