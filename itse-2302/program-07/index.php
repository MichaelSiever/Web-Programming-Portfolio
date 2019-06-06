<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 7: Michael T. Siever</title>
		<link href="program-07.css" rel="stylesheet">
	</head>

	<body>
		<h1>Program 07</h1>
		
		<hr>
		
		<h2>Requirements #01, #02, and #03</h2>
		
		<form action="daymonth.php" method="get">	
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
			</datalist>&nbsp;
	
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
			</datalist>&nbsp;
			<input type="submit" name="submit" value="Submit">
		</form><br><br>
			
		<a href="selfprocessor.php">Go to Requirement #08</a>&nbsp;
		<a href="validatecontrols.php">Go to Requirement #09</a><br><br>
			
		<hr>
				
		<h2>Requirement #04</h2>
		
		<p><span class="error">* Required field.</span></p>
				
		<form action="favorites.php" method="post">
    		Name:
        		<input type="text" name="name" title="Name is required" required>
        		<span class="error">* </span>
    		<br><br>
   		 	Favorite Movie:
        		<input type="text" name="movie" title="Movie is required" required>
        		<span class="error">* </span>
    		<br><br>
    		Favorite Food:
        		<input type="text" name="food" title="Food is required" required>
        		<span class="error">* </span>
    		<br><br>
    		Favorite Season:
    			<input type="radio" name="season" value="Spring">Spring
        		<input type="radio" name="season" value="Summer" checked>Summer
        		<input type="radio" name="season" value="Fall">Fall
        		<input type="radio" name="season" value="Winter">Winter
    		<br><br>
    		Comments (These are optional):<br>
        		<textarea name="comments" rows="4" cols="50"></textarea>
    		<br><br>
    		<input type="submit" name="submit" value="Submit">
    	</form>
		
		<hr>
		
		<h2>Requirement #06</h2>
		
		<form action="html.php" method="post" id="form1">
			Select your favorite color: 
			<input type="color" name="favcolor">
			<br><br>
			E-mail:
  			<input type="email" name="email" autocomplete="on" placeholder="E-mail">
  			<br><br>
  			Quantity (between 1 and 5):
  			<input type="number" name="quantity" min="1" max="5">
  			<br><br>
  			Points (between 0 and 10):
  			<input type="range" name="points" min="0" max="10" step="2">
  			<br><br>
  			<input type="submit" name="submit" value="Submit">
  			<br><br>
  		</form>
  		
  		Birthday:
		<input type="date" name="bday" form="form1">
		<br><br>
  		
 		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="../index.html">Return to Main ITSE 2302 Page</a></p>
			</div>
		</footer>
	</body>
</html>