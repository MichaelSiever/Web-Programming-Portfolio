<?php
	# Michael Siever's Program #08 session_display.php
	
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever session_display.php</title>
		<link href="program-08.css" rel="stylesheet">
	</head>
		
	<body>
		<h1>session_display.php</h1>
		
		<hr>
    		
    	<?php
        	echo "City is ".$_SESSION['city'].".<br/>";
        	echo "State is ".$_SESSION['state'].".<br/>";
    	?>
    		
		<hr>
			
		<a href="index.php">Go Back</a>
	</body>
</html>