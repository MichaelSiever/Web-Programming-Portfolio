<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 9: Michael T. Siever</title>
		<link href="program-09.css" rel="stylesheet">
	</head>

	<body>
		<h1>Program 09</h1>
		
		<hr>
		
		<h2>Requirement #01</h2>
		
		<form action="index.php" method="post">
			Click button to connect to the database:
    		<input type="submit" value="Connect" name="connect">
    	</form>
    	
    	<br>
    	
    	<?php
    		if (isset($_POST['connect'])) {
				include "credentials.php";
				
				echo "Successfully connected to the database.";
			}
		?>
    	
    	<hr>
    	
    	<h2>Requirement #02</h2>

		<form action="index.php" method="post">
			Click button to disconnect from the database:
    		<input type="submit" value="Disconnect" name="disconnect">
    	</form>
    	
    	<br>
    	
    	<?php
    		if (isset($_POST['disconnect'])) {
    			include "credentials.php";
					
				$conn->close();
				echo "Successfully disconnected from the database.";
			}
		?>

		<hr>
		
		<h2>Requirement #03</h2>
		
		<form action="index.php" method="post">
			Click button to create a database table 'teams':
    		<input type="submit" value="Create Table" name="createTable">
    	</form>
    	
    	<br>
    	
    	<?php
			if (isset($_POST['createTable'])) {
				include "credentials.php";		

				// sql to create table
				$sql = "CREATE TABLE teams (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				teamname VARCHAR(30),
				city VARCHAR(30),
				bestplayer VARCHAR(30),
				yearformed YEAR,
				website VARCHAR(50) 
				)";

				if ($conn->query($sql) === TRUE) {
    				echo "Table teams created successfully.";
				} else {
					echo "Error creating table: " . $conn->error;
				}
				
				// Disconnect from database		
				$conn->close();
			}
		?>
    	
		<hr>
		
		<h2>Requirement #04</h2>
		
		<?php
			$url1Err = $url2Err = $url3Err = $url4Err = '';
    			
    		$tname1 = $city1 = $player1 = $year1 = $url1 =
			$tname2 = $city2 = $player2 = $year2 = $url2 =
			$tname3 = $city3 = $player3 = $year3 = $url3 =
			$tname4 = $city4 = $player4 = $year4 = $url4 = '';
		
			function test_input($data) {
    			$data = trim($data);
    			$data = stripslashes($data);
    			$data = htmlspecialchars($data);
    		 	return $data;
			}
			
			if(isset($_POST['addData'])) {
    			$validForm = true;
    			
    			$tname1 = test_input($_POST['tname1']);
				$city1 = test_input($_POST['city1']);
				$player1 = test_input($_POST['player1']);
				$year1 = test_input($_POST['year1']);
				$url1 = test_input($_POST['url1']);
    			if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $url1)) {
        			$url1Err = "Invalid URL";
     				$validForm = false;
        		}
					
				$tname2 = test_input($_POST['tname2']);
				$city2 = test_input($_POST['city2']);
				$player2 = test_input($_POST['player2']);
				$year2 = test_input($_POST['year2']);
				$url2 = test_input($_POST['url2']);
				if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $url2)) {
        			$url2Err = "Invalid URL";
     				$validForm = false;
        		}
					
				$tname3 = test_input($_POST['tname3']);
				$city3 = test_input($_POST['city3']);
				$player3 = test_input($_POST['player3']);
				$year3 = test_input($_POST['year3']);
				$url3 = test_input($_POST['url3']);
				if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $url3)) {
        			$url3Err = "Invalid URL";
     				$validForm = false;
        		}
					
				$tname4 = test_input($_POST['tname4']);
				$city4 = test_input($_POST['city4']);
				$player4 = test_input($_POST['player4']);
				$year4 = test_input($_POST['year4']);
				$url4 = test_input($_POST['url4']);
				if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $url4)) {
        			$url4Err = "Invalid URL";
     				$validForm = false;
        		}
        		
        		if ($validForm) {
        			include "credentials.php";
					
					$sqlINS = "INSERT INTO teams (teamname, city, bestplayer, yearformed, website) 
						VALUES ('$tname1', '$city1', '$player1', '$year1', '$url1');";
					$sqlINS .= "INSERT INTO teams (teamname, city, bestplayer, yearformed, website) 
						VALUES ('$tname2', '$city2', '$player2', '$year2', '$url2');";
					$sqlINS .= "INSERT INTO teams (teamname, city, bestplayer, yearformed, website) 
						VALUES ('$tname3', '$city3', '$player3', '$year3', '$url3');";
					$sqlINS .= "INSERT INTO teams (teamname, city, bestplayer, yearformed, website) 
						VALUES ('$tname4', '$city4', '$player4', '$year4', '$url4')";
						
					if ($conn->multi_query($sqlINS) === TRUE) {
						do {
							$last_id = $conn->insert_id;
						} while ($conn->next_result());
						echo "New records created successfully"; 
					} else {
						echo "Error: ". $sqlINS ."<br>". $conn->error(); 
					}
					
					echo "<br>Last inserted ID is: ". $last_id;
					
					$conn->close();
				}
			}
		?>
		
		<p>Click button to add data to the 'teams' table:
		
    	<form action="index.php" method="post">
			<div>
    			Team #1: <br><br>
    			Name: <input type="text" name="tname1" value="<?php echo $tname1;?>" required>&nbsp;
    			City: <input type="text" name="city1" value="<?php echo $city1;?>"required>&nbsp;
    			Best Player: <input type="text" name="player1" value="<?php echo $player1;?>" required>&nbsp;
    			Year Formed: <input type="text" name="year1" value="<?php echo $year1;?>"required>&nbsp;
    			Website: <input type="text" name="url1" value="<?php echo $url1;?>" required>
    			<span class="error"><?php echo $url1Err;?></span>
			</div><br><br>

			<div>
    			Team #2: <br><br>
    			Name: <input type="text" name="tname2" value="<?php echo $tname2;?>" required>&nbsp;
    			City: <input type="text" name="city2" value="<?php echo $city2;?>" required>&nbsp;
    			Best Player: <input type="text" name="player2" value="<?php echo $player2;?>" required>&nbsp;
    			Year Formed: <input type="text" name="year2" value="<?php echo $year2;?>" required>&nbsp;
    			Website: <input type="text" name="url2" value="<?php echo $url2;?>" required>
    			<span class="error"><?php echo $url2Err;?></span>
			</div><br><br>
			
			<div>
    			Team #3: <br><br>
    			Name: <input type="text" name="tname3" value="<?php echo $tname3;?>" required>&nbsp;
    			City: <input type="text" name="city3" value="<?php echo $city3;?>" required>&nbsp;
    			Best Player: <input type="text" name="player3" value="<?php echo $player3;?>" required>&nbsp;
    			Year Formed: <input type="text" name="year3" value="<?php echo $year3;?>" required>&nbsp;
    			Website: <input type="text" name="url3" value="<?php echo $url3;?>" required>
    			<span class="error"><?php echo $url3Err;?></span>
			</div><br><br>
			
			<div>
    			Team #4: <br><br>
    			Name: <input type="text" name="tname4" value="<?php echo $tname4;?>" required>&nbsp;
    			City: <input type="text" name="city4" value="<?php echo $city4;?>" required>&nbsp;
    			Best Player: <input type="text" name="player4" value="<?php echo $player4;?>" required>&nbsp;
    			Year Formed: <input type="text" name="year4" value="<?php echo $tname4;?>"required>&nbsp;
    			Website: <input type="text" name="url4" value="<?php echo $url4;?>" required>
    			<span class="error"><?php echo $url4Err;?></span>
			</div><br><br>
			
			<input type="submit" value="Add Data" name="addData"> 
		</form>
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="../index.html">Return to Main ITSE 2302 Page</a></p>
			</div>
		</footer>
	</body>
</html>