<?php    
	header('Content-Type: text/html; charset=iso-8859-1');  
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 5: Michael T. Siever</title>
		<link href="program-05.css" rel="stylesheet">
	</head>

	<body>
		<h1>Program 05</h1>

		<hr>
		
		<h2>Requirement #01</h2>
		
		<h1>
			<?php 
				echo "Welcome to PHP!";
				$name = "Michael Siever";
        		$x = pi()*(pow(33,2));
			?>
		</h1>

    	<h2><?=$name?></h2>

    	<h3><?=$x?></h3>

		<hr>
		
		<h2>Requirement #02</h2>
		
		<?php
			function Req2SupportYourLocalVariables() {
    			$lVariable1 = "The end is ";
    			$lVariable2 = "nigh.";
    			$lNumVar1 = 19 - 7;
    			$lNumVar2 =  24 / 4;
    			
    			echo "Here's a string using two local variables: ". $lVariable1 . $lVariable2."<br>";
    			echo var_dump($lVariable1).var_dump($lVariable2)." <br><br>";
    			echo "And here are two numeric local variables: ". $lNumVar1 . " and ". $lNumVar2."<br>";
    			echo var_dump($lNumVar1).var_dump($lNumVar2)." <br><br>";
			}
			
			Req2SupportYourLocalVariables();
			
			$gVariable1 = "Hasta la vista, ";
			$gVariable2 = "baby...";
			$gNumVar1 = 2 * 2;
			$gNumVar2 = 12 + 4;
			
			echo "Here's a string using two global variables: ". $gVariable1 . $gVariable2. ".<br><br>";
			echo var_dump($gVariable1).var_dump($gVariable2)." <br/><br/>";
			echo "Here are two numeric global variables: ". $gNumVar1 . " and ". $gNumVar2."<br><br>";
			echo var_dump($gNumVar1).var_dump($gNumVar2)." <br><br>";
		
			function Req2StaticShock()
			{
    			static $num = 0;
    			echo $num;
    			$num++;
			}
			
			echo "The following is the use of a static variable, starting at 0 and adding 1 each time it iterates: <br><br>";
			Req2StaticShock();
			echo "<br>";
			Req2StaticShock();
			echo "<br>";
			Req2StaticShock();
			echo "<br><br>";
			
			function Req2FeelingEcStatic()
			{
    			static $num2 = 0;
    			echo $num2;
    			$num2+=2;
			}
			
			echo "The following is the use of a static variable, starting at 0 and adding 2 each time it iterates: <br><br>";
			
			Req2FeelingEcStatic();
			echo "<br>";
			Req2FeelingEcStatic();
			echo "<br>";
			Req2FeelingEcStatic();
			echo "<br>";
		?>
		
		<hr>
		
		<h2>Requirement #03</h2>
		
		<?php
			echo "Contents of an array called by a function in the DaysofWeek class:<br><br>";
			
			class DaysofWeek {
				private $daysArray = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    			public function getDaysofWeek() {
        			return $this->daysArray;
    			}
			}
			
			$MyDaysofWeek = new DaysofWeek;
			$days = $MyDaysofWeek->getDaysofWeek();
			
			$arrlength = count($days);
			for($x = 0; $x < $arrlength; $x++) {
    					echo $days[$x];
    					echo "<br>";
    		}
		?>
    	
		<hr>
		
		<h2>Requirement #04</h2>

    	<?php
        	$req4String = "JavaScript and PHP are so much fun!";
        	$req4StringLength = strlen($req4String);
        	$req4StringWords = str_word_count($req4String);
        	$req4StringPosition = strpos($req4String,'PHP') + 1;
        	$req4StringReplace = str_replace('so much fun', 'wonderful', $req4String);
        	
    		echo "String: ". $req4String ."<br>";
    		echo "This string has a length of ". $req4StringLength ." characters.<br>";
    		echo "It contains ". $req4StringWords ." words.<br>";
    		echo "The word 'PHP' begins at the ". $req4StringPosition ."th character.<br>";
    		echo "Altered string: ". $req4StringReplace. "<br>";
    	?>
    	
		<hr>
		
		<h2>Requirement #05</h2>
		
		<?php
        	$Req5String = "Javascript and PHP are so much fun!";
        	
        	echo "String: ". $Req5String ."<br><br>";
        	echo "String converted to an array: <br><br>";
        	
        	$Req5Array1 = explode(" ", $Req5String);
        	
        	$arrlength = count($Req5Array1);
        	
        	for($x = 0; $x < $arrlength; $x++) {
    					echo $Req5Array1[$x];
    					echo "<br>";
    		}
    	?>
    	
		<hr>
		
		<h2>Requirement #06</h2>
		
    	<?php
    		echo "Array: <br><br>";
    		
    		$arrlength = count($days);
			for($x = 0; $x < $arrlength; $x++) {
    					echo $days[$x];
    					echo "<br>";
    		}
    		
    		$daysString = implode(" ",$days);
    		
    		echo "<br>Array converted to string: ". $daysString;
    	?>

		<hr>
		
		<h2>Requirement #07</h2>

    	<?php
    		echo "A sentence of formatted output using the variables from Requirement #02: ";
    		printf("You are terminated, Model %s-%s. %s %s.",$gNumVar1, $gNumVar2, $gVariable1, $gVariable2);
    	?>
    	
    	<hr>
    	
    	<h2>Requirement #08</h2>
    	
    	<?php
        	$Req8String = "JavaScript and PHP are so much fun!";
        	$Req8DecodedString = utf8_decode($Req8String);
        	$Req8DistinctChars = count_chars($Req8DecodedString, 3);
        	$Req8StrayChars = count_chars($Req8String, 4);
        	
        	echo "Here is a string: ". $Req8DecodedString. "<br><br>";
        	echo "It has been decoded to the ISO-8859-1 charset.<br><br>";
    	    echo "It has the following unique characters: ". $Req8DistinctChars. "<br><br>";
    	    echo "Here is a list of the characters not used: ". $Req8StrayChars. "<br><br>";
    	    echo "Here is an array that displays the ASCII code of each character and number of occurrences): <br><br>";
    	    
    	    $Req8DistinctCharsArray = count_chars($Req8String, 1);
    	    
    	    foreach($Req8DistinctCharsArray as $key => $value) {
    	    	echo "ASCII character: $key, Number of occurrences: $value";
    	    	echo "<br>";
    	    	}
    	?>
    	
		<hr>
		
		<h2>Requirement #09</h2>
		
		<?php
    		$Req9Var = "&lt;&amp;&cent;&pound;&yen;&euro;&copy;&gt;";
    		
    		echo "Here is the output of a variable containing decoded special characters: ". htmlspecialchars_decode($Req9Var);
    	?>
		
		<hr>
		
		<h2>Requirement #10</h2>
		
		<?php
    		$req10String = "HTML, CSS, JavaScript, and PHP are so much fun!";
    		$req10StringShuffled = str_shuffle($req10String);
    		
    		echo "Original string: ". $req10String."<br><br>";
    		echo "Shuffled string: ". $req10StringShuffled;
		?>
		
		<hr>
		
		<h2>Requirement #11</h2>
		
		<?php 
    		$req11String = $req10String;
    		$req11StringLC = lcwords($req11String);
    		
    		function lcwords($string) {
				$string = explode(" ", $string);
				$i = 0;
				
				while($i < count($string)) {
					$string[$i] = lcfirst($string[$i]);
					$i++;
				}
				return implode(" ", $string);
			}
    		echo "First character of each word in the string changed to lowercase: ". $req11StringLC;
    	?>  
    	
    	<hr>
    	
    	<h2>Requirement #12</h2>
    	
    	<?php
    		$req12String = $req10String;
    		
    		echo "Each word of the string printed on its own individual line :<br><br>";
    			
    		$req12StringNewLine = strtok($req12String, " ");	
    		
    		while ($req12StringNewLine !== false) {
   				echo "$req12StringNewLine<br>";
   				$req12StringNewLine = strtok(" ");
   			}
		?>
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="../index.html">Return to Main ITSE 2302 Page</a></p>
			</div>
		</footer>
	</body>
</html>