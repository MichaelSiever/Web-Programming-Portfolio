<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever daymonth.php</title>
		<link href="program-07.css" rel="stylesheet">
	</head>

	<body>
	
		<h1>daymonth.php</h1>
	
		<hr>
	
		<?php
			$daysofweek = $monthsofyear = ""; // Initiating both values to null
		
        	if($_SERVER["REQUEST_METHOD"] == "GET") {
            	$daysofweek = validate_input($_GET["daysofweek"]);
            	$monthsofyear = validate_input($_GET["monthsofyear"]);
        	}
        
        	function validate_input($data) {
        		$data = trim($data);
        		$data = stripslashes($data);
        		$data = htmlspecialchars($data);
        		return $data;
    		}
		?>
		
		<h2>Greetings!</h2>
		You selected the day: <?php echo $_GET["daysofweek"];?><br>
		You selected the month: <?php echo $_GET["monthsofyear"];?>

		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="index.php">Return to previous page</a></p>
			</div>
		</footer>
	</body>
</html>