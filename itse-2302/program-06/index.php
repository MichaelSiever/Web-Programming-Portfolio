<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 6: Michael T. Siever</title>
		<link href="program-06.css" rel="stylesheet">
	</head>

	<body>
		<h1>Program 06</h1>

		<hr>
		
		<h2>Requirement #01</h2>
		
		<p>Here is a list of nine planets.</p>
		
		<?php
			define('PLANET_1','Mercury');
			define('PLANET_2','Venus');
			define('PLANET_3','Earth');
			define('PLANET_4','Mars');
			define('PLANET_5','Jupiter');
			define('PLANET_6','Saturn');
			define('PLANET_7','Uranus');
			define('PLANET_8','Neptune');
			define('PLANET_9','Pluto');
			function displayPlanets()
			{
				echo PLANET_1 .", ". PLANET_2 .", ". PLANET_3 .", ".
					 PLANET_4 .", ". PLANET_5 .", ". PLANET_6 .", ".
					 PLANET_7 .", ". PLANET_8 .", ". PLANET_9 .".";
        	}
        	displayPlanets();
        ?>
		
		<hr>
		
		<h2>Requirement #02</h2>
		
		<?php
			echo "The following is displayed about the weather
			based on the current month: <br><br>";
			$currentMonth = date("M");
			req2_weather($currentMonth);
			function req2_weather($currentMonth) {
    			switch($currentMonth) {
        			case $currentMonth == 'Dec':
        			case $currentMonth =='Jan':
        			case $currentMonth =='Feb':
            			echo 'It is chilly winter.';
            			break;
        			case $currentMonth == 'Mar':
        			case $currentMonth == 'Apr':
        			case $currentMonth == 'May':
            			echo 'A beautiful spring.';
            			break;
        			case $currentMonth == 'Jun':
        			case $currentMonth == 'Jul':
        			case $currentMonth == 'Aug':
            			echo 'The heat of summer.';
            			break;
        			case $currentMonth == 'Sep':
        			case $currentMonth == 'Oct':
        			case $currentMonth == 'Nov':
            			echo 'Fabulous Fall';
            			break;
    			}
			}
		?>
		
		<hr>
		
		<h2>Requirement #03</h2>
		
		<p>Select your state's capital from the drop-down menu.</p>
		 
		<form action="index.php" method="post">
			Name: <select name="Capital">
				<option>Austin</option>
				<option>Montpelier</option>
				<option>Cheyenne</option>
				<option>St. Paul</option>
				<option>Albany</option>
				<option>Baton Rouge</option>
				<option>Tallahassee</option>
				<option>Des Moines</option>
				<option>Columbus</option>
				<option>Augusta</option>
				<option>Other</option>
			</select>
			<input type="submit">
		</form>
		
		<?php
			if(isset($_POST['Capital'])) {
				$capital = $_POST['Capital'];
    			switch ($capital) {
        			case $capital == 'Austin':
            			echo "<br>". $capital ." is the capital of Texas.";
            			break;
        			case $capital == 'Montpelier':
        				echo "<br>". $capital ." is the capital of Vermont.";
        				break;
        			case $capital == 'Cheyenne':
            			echo "<br>". $capital ." is the capital of Wyoming.";
            			break;
        			case $capital == 'St. Paul':
        				echo "<br>". $capital ." is the capital of Minnesota.";
        				break;
        			case $capital == 'Albany':
            			echo "<br>". $capital ." is the capital of New York.";
            			break;
        			case $capital == 'Baton Rouge':
        				echo "<br>". $capital ." is the capital of Louisiana.";
        				break;
      				case $capital == 'Tallahassee':
        				echo "<br>". $capital ." is the capital of Florida.";
        				break;
        			case $capital == 'Des Moines':
            			echo "<br>". $capital ." is the capital of Iowa.";
            			break;
            		case $capital == 'Columbus':
            			echo "<br>". $capital ." is the capital of Ohio.";
            			break;
            		case $capital == 'Augusta':
            			echo "<br>". $capital ." is the capital of Maine.";
            			break;
        			default:
            			echo "<br>I'm not familiar with that state...";
            			break;
    			}
			}
		?>
		
		<hr>
		
		<h2>Requirement #04</h2>
		
		<?php
			$currentDay = date('d');
			
			echo "While loop of current day (#) of the month 
			and saying 'Hello' that number of times : <br><br>";
			
			function Req4WhileHello($currentDay) {
    			$i = 0;
    			echo "It is day #". $currentDay ." of the month: ";
    			while($i < (int)$currentDay) {
        			echo "Hello\t";
        			$i++;
    			}
			}
			
			Req4WhileHello($currentDay);
		?>
		
		<hr>
		
		<h2>Requirement #05</h2>
		
		<?php
			echo "Do-while loop of current day (#) of the month 
			and saying 'Hello' that number of times : <br><br>";
			
    		function Req5DoHello($currentDay) {
        		$i = 0;
        		echo "It is day #". $currentDay ." of the month: ";
        		do {
            		echo "Hello\t";
            		$i++;
        		} while($i < (int)$currentDay);
			}
			
			Req5DoHello($currentDay);
		?>
		
		<hr>
		
		<h2>Requirement #06</h2>
		
		<?php
			echo "For loop of 1 through 25 squared: <br><br>";
		
			for($i = 1; $i <= 25; $i++) {
    			$numSquared = pow($i, 2);
    			echo $i ." squared is ". $numSquared .".<br>";
			}
		?>
		
		<hr>
		
		<h2>Requirement #07</h2>
		
		<?php
			echo "Foreach loop that displays all of the months
			stored in an array: <br><br>";
			
			$monthsArray = array('January', 'February', 'March', 
			'April', 'May', 'June', 'July', 'August', 'September', 
			'October', 'November', 'December');
			
			function Req7ForEach($anArray) {
    			foreach($anArray as $val) {
        			echo $val . " ";
    			}
			}
			
			Req7ForEach($monthsArray);
    	?>
    	
    	<hr>
    	
    	<h2>Requirement #08</h2>
    	
    	<?php
    		echo "Names of 5 NFL Quarterbacks from 5 teams that
    		are listed by calling a function 5 times: <br><br>";
    		
			function Req8PHPQuarterback($playerName,$team ) {
    			echo $playerName. " plays for the ". $team .".<br>";
			}
			Req8PHPQuarterback('Tom Brady', 'Patriots');
			Req8PHPQuarterback('Drew Brees', 'Saints');
			Req8PHPQuarterback('Nick Foles', 'Eagles');
			Req8PHPQuarterback('Aaron Rodgers', 'Packers');
			Req8PHPQuarterback('Eli Manning', 'Giants');
		?>
    	
    	<hr>
    	
    	<h2>Requirement #09</h2>
    	
    	<?php
    		echo "Quotients of 5 division equations that
    		are listed by calling a function 5 times: <br><br>";
    		
			function Req9DivideAndConquer($num1, $num2) {
    			if($num2 == 0) {
        			echo "Error: Cannot divide by 0.";
    			} else {
        			echo "The result of ". $num1. " divided by " .$num2 ." is ". ($num1/$num2) .".<br>";
    			}
			}
			Req9DivideAndConquer(9, 5);
			Req9DivideAndConquer(8, 3);
			Req9DivideAndConquer(10, 4);
			Req9DivideAndConquer(250, 5);
			Req9DivideAndConquer(5, 0);
		?>
		
		<hr>
    	
    	<h2>Requirement #10</h2>
    	
    	<?php
    		echo "Foreach loop that shows best-selling 
    		vehicle by manufacturer: <br><br>";
    		
			$carsArray = array(
    			'Nissan'=>'Rogue',
    			'Chevrolet'=>'Equinox',
    			'Toyota'=>'Camry',
    			'Honda'=>'CR-V',
    			'Ford'=>'F-Series',
    			'Dodge'=>'Ram',
    			'Jeep'=>'Wrangler'
			);
			foreach($carsArray as $manufacturer=>$vehicle) {
    			echo $manufacturer ."'s best-selling vehicle is the ". $vehicle .".<br>";
			}
		?>
		
		<hr>
		
		<h2>Requirement #11</h2>
		
		<?php
			echo "Here is the same array as above, but now it has been
			sorted in ascending order by manufacturer: <br><br>";
			
			function carManuSort($array) {
    			ksort($array);
        		foreach ($array as $manufacturer=>$vehicle) {
            		echo $manufacturer ." makes the best-selling ". $vehicle .".<br>";
        		}
			}
			
			carManuSort($carsArray);
		?>
		
		<hr>
		
		<h2>Requirement #12</h2>
		
		<?php
			echo "Here is the same array again, but now it has been
			sorted in ascending order by the vehicle: <br><br>";
			
			function carVehiSort($array) {
    			asort($array);
        		foreach ($array as $manufacturer=>$vehicle) {
            		echo $vehicle ." is the best-selling vehicle made by ". $manufacturer .".<br>";
        		}
			}
			
			carVehiSort($carsArray);
			
			echo "<br>Note: CR-V appears before Camry because uppercase 
			'R' comes before lowercase 'a' in the ASCII Table.";
		?>
		
		<hr>
		
		<h2>Requirement #13</h2>
		
		<?php
			function Req13YouGotServered() {
    			echo "The name (and path) of the currently executing
    			PHP file is: ". $_SERVER['PHP_SELF'] ."<br>";
    			echo "The IP address of the host
    			server is: ". $_SERVER['SERVER_ADDR'] ."<br>";
    			echo "The method of request sent to the
    			server is: ". $_SERVER['REQUEST_METHOD'] ."<br>";
    			echo "The IP address of the browser viewing the
    			page: ". $_SERVER['REMOTE_ADDR'];
			}
			Req13YouGotServered();
		?>
		
		<hr>
		
		<h2>Requirement #14</h2>
		
		<?php
			$carsArray2 = array(
				'Mini'=>'Cooper',
    			'Chevrolet'=>'Equinox',
    			'Toyota'=>'Camry',
    			'BMW'=>'328i',
    			'Ford'=>'Taurus',
    			'Lexus'=>'RX 300',
    			'Jeep'=>'Wrangler'
			);
			
			function Req14FindChanges($a, $b) {
				if ($a == $b) {
					return 0;
				}
				return ($a > $b) ? 1 : -1;
			}
			
			echo "The elements in Array #1 NOT in Array #2: <br><br>";	
			$result = array_udiff($carsArray, $carsArray2, "Req14FindChanges");
			print_r($result);
				
        	echo "<br><br>The elements in Array #2 NOT in Array #1: <br><br>";
			$result2 = array_udiff($carsArray2, $carsArray, "Req14FindChanges");
			print_r($result2);
        ?>
        
		<hr>
		
		<h2>Requirement #15</h2>
		
		<?php
			function Req15FindSimilarities($a, $b) {
					if ($a === $b) {
						return 0;
					}
					return ($a > $b) ? 1 : -1;
				}
				
			echo "The elements in Array #1 that are also in Array #2: <br><br>";	
			$result = array_uintersect_assoc($carsArray, $carsArray2, "Req15FindSimilarities");
			print_r($result);
		?>
		
		<hr>
		
		<h2>Requirement #16</h2>
		
		<?php
			echo "Searching for a key that matches 'Volvo' in carsArray: <br><br>";
			
			function Req16QuitBooleanMe($key, $array) {
				if (array_key_exists($key, $array)) {
					echo "True!";
  				} else {
  					echo "False!";
  				}
  			}
  			
  			Req16QuitBooleanMe('Volvo', $carsArray);
  		?>
		
		<hr>
		
		<h2>Requirement #17</h2>
		
		<?php
			echo "Searching for a matching key with the value 'CR-V' in carsArray: <br><br>";
			
			function matchGame($value, $array) {
            	if(in_array($value, $array)) {
                	$key = array_search($value, $array);
                	echo "Found Key: ". $key;
            	} else {
                	echo "False!";
            	}
        	}
        	
        	matchGame('CR-V', $carsArray);
        ?>
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="../index.html">Return to Main Page</a></p>
			</div>
		</footer>
	</body>
</html>