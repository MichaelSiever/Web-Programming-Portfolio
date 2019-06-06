<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever selfprocessor.php</title>
		<link href="program-07.css" rel="stylesheet">
	</head>

	<body>
	
		<h1>selfprocessor.php</h1>
	
		<hr>
		
		<h2>Requirement #08</h2>

		<?php
			$r8day = filter_input(INPUT_POST, "daysofweek");
			$r8month = filter_input(INPUT_POST, "monthsofyear");
			$r8name = filter_input(INPUT_POST, "name");
			$r8movie = filter_input(INPUT_POST, "movie");
			$r8food = filter_input(INPUT_POST, "food");
			$r8season = filter_input(INPUT_POST, "season");
			$r8comments = filter_input(INPUT_POST, "comments");
			$r8color = filter_input(INPUT_POST, "favcolor");
			$r8email = filter_input(INPUT_POST, "email");
			$r8quantity = filter_input(INPUT_POST, "quantity");
			$r8points = filter_input(INPUT_POST, "points");
			$r8bday = filter_input(INPUT_POST, "bday");
			
			$valid = true;
			$nameErr = $movieErr = $foodErr = "";
			$daysofweek = $monthsofyear = $name = $movie = $food = $season = 
			$comments = $color = $email = $quantity = $points = $bday = "";
			
			if(filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST") { 
				$daysofweek = validate_input($r8day);
            	$monthsofyear = validate_input($r8month);
            	if(empty($r8name)) {
        			$nameErr = "Name is required";
        			$valid = false;
    			} else {
        			$name = validate_input($r8name);
        			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            			$nameErr = "Only letters and white space allowed";
            			$valid = false;
        			}
    			}
    			
    			if(empty($r8movie)) {
        			$movieErr = "Movie is required";
        			$valid = false;
    			} else {
        			$movie = validate_input($r8movie);
        			if (!preg_match("/^[a-zA-Z0-9 ]*$/", $movie)) {
            			$movieErr = "Only letters, numbers, and white space allowed";
            			$valid = false;
        			}
    			}	
    			
    			if(empty($r8food)) {
        			$foodErr = "Food is required";
        			$valid = false;
    			} else {
        			$food = validate_input($r8food);
        			if (!preg_match("/^[a-zA-Z ]*$/", $food)) {
            			$foodErr = "Only letters and white space allowed";
            			$valid = false;
        			}
    			}   
    							
    			$season = validate_input($r8season);
    			
    			if (empty($r8comments)) {
    				$comments = "";
  				} else {
    				$comments = validate_input($r8comments);
  				}
  				
  				$color = validate_input($r8color);
				$email = validate_input($r8email);
				$quantity = validate_input($r8quantity);
				$points = validate_input($r8points);
				$bday = validate_input($r8bday);
			}
			
			function validate_input($data) {
        		$data = trim($data);
        		$data = stripslashes($data);
        		$data = htmlspecialchars($data);
        		return $data;
    		}
    	?>
		
		<p><span class="error">* Required field.</span></p>
		
		<form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
		id ="form1">
			Choose a day of the week: 
			<input list="daysofweek" name="daysofweek">
			<datalist id="daysofweek">
        		<option value="Sunday">
        		<option value="Monday">
        		<option value="Tuesday">
        		<option value="Wednesday">
    			<option value="Thursday">
    			<option value="Friday">
    			<option value="Saturday">
			</datalist><br><br>
	
			Choose a month of the year: 
			<input list="monthsofyear" name="monthsofyear">
			<datalist id="monthsofyear">
        		<option value="January">
        		<option value="February">
        		<option value="March">
        		<option value="April">
        		<option value="May">
        		<option value="June">
        		<option value="July">
        		<option value="August">
        		<option value="September">
        		<option value="October">
        		<option value="November">
        		<option value="December">
			</datalist><br><br>
			
			Name:
        	<input type="text" name="name" value="<?php echo $name;?>">
        	<span class="error">* <?php echo $nameErr;?></span>
    		<br><br>
   		 	Favorite Movie:
        	<input type="text" name="movie" value="<?php echo $movie;?>">
        	<span class="error">* <?php echo $movieErr;?></span>
    		<br><br>
    		Favorite Food:
        	<input type="text" name="food" value="<?php echo $food;?>">
        	<span class="error">* <?php echo $foodErr;?></span>
    		<br><br>
    		Favorite Season:
    		<?php if(isset($_POST["season"]) == "true") echo $_POST["season"] ." was selected";?>
    		<input type="radio" name="season" value="Spring">Spring
        	<input type="radio" name="season" value="Summer" checked>Summer
        	<input type="radio" name="season" value="Fall">Fall
        	<input type="radio" name="season" value="Winter">Winter
    		<br><br>
    		Comments (These are optional):<br>
        	<textarea name="comments" rows="4" cols="50" wrap="hard">
        	<?php echo $comments;?></textarea>
    		<br><br>
    		Favorite color: 
			<input type="color" name="favcolor" value="<?php echo $color;?>">
			<br><br>
			E-mail:
  			<input type="email" name="email" autocomplete="on" placeholder="E-mail" 
  			value="<?php echo $email;?>">
  			<br><br>
  			Quantity (between 1 and 5):
  			<input type="number" name="quantity" min="1" max="5" value="<?php echo $quantity;?>">
  			<br><br>
  			Points (between 0 and 10):
  			<input type="range" name="points" min="0" max="10" step="2" value="<?php echo $points;?>">
  			<br><br>
  			<input type="submit" value="Submit">
  			<br><br>
		</form>
		
		Birthday:
		<input type="date" name="bday" form="form1"
		value="<?php echo $bday;?>">
		<br><br>
		
		<hr>
		
		<?php
			if (filter_input(INPUT_SERVER, "REQUEST_METHOD") !== "POST") {
				echo "Click 'Submit' button when you are ready";
			} else if (filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST" && $valid == false) {
				echo "Please input only valid information for all of the starred (*) fields/radios";
			} else {
				echo "<h2>Your Input:</h2>".
				"<p>Day of Week: $daysofweek<br>".
				"Month: $monthsofyear<br>".
				"Name: $name<br>".
				"Favorite Movie: $movie<br>".
				"Favorite Food: $food<br>".
				"Favorite Season: $season<br>".
				"Comments: $comments<br>".
				"Favorite Color (in hexidecimal notation): $color<br>".
				"E-mail: $email<br>".
				"Quantity: $quantity<br>".
				"Points: $points<br>".
				"Birthday: $bday<br></p>";
			}
		?>
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="index.php">Return to previous page</a></p>
			</div>
		</footer>
	</body>
</html>