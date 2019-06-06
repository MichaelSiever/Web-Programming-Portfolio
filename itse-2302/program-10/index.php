<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 10: Michael T. Siever</title>
		<link href="program-10.css" rel="stylesheet">
	</head>

	<body>
		<h1>Program 10</h1>
		
		<hr>
		
		<h2>Requirement #01</h2>
		
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
					
        			$stmt = $conn->prepare("INSERT INTO teams (teamname, city, bestplayer, yearformed, website)
          				VALUES(?,?,?,?,?)");
        			$stmt->bind_param("sssis", $teamname, $city, $bestplayer, $yearformed, $website);
        			
        			$teamname = $tname1;
        			$city = $city1;
        			$bestplayer = $player1;
        			$yearformed = $year1;
        			$website = $url1;
        			$stmt->execute();
        			
        			$teamname = $tname2;
        			$city = $city2;
        			$bestplayer = $player2;
        			$yearformed = $year2;
        			$website = $url2;
        			$stmt->execute();
        			
        			$teamname = $tname3;
        			$city = $city3;
        			$bestplayer = $player3;
        			$yearformed = $year3;
        			$website = $url3;
        			$stmt->execute();
        			
        			$teamname = $tname4;
        			$city = $city4;
        			$bestplayer = $player4;
        			$yearformed = $year4;
        			$website = $url4;
        			$stmt->execute();
        				
        			do {
					$last_id = $conn->insert_id;
					} while ($conn->next_result());
            		echo "New records created successfully. <br>Last inserted ID is: ". $last_id;
        				
        			$stmt->close();	
				}
			$conn->close();
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
			
			<input type="hidden" value="Add Data" name="addData"> 
			<input type="submit">
		</form>
			
		<hr>
		
		<h2>Requirement #02</h2>
		
		<form action="index.php" method="post">
			Choose a fieldname to receive ALL of the data:
            <select name="selectfield">
                <option value="teamname">Team Name</option>
                <option value="city">City</option>
                <option value="bestplayer">Best Player</option>
                <option value="yearformed">Year Formed</option>
                <option value="website">Website</option>
            </select>
        	<input type="submit" value="Submit">
		</form><br>
		
		<?php
			include "credentials.php";
						
			if (isset($_POST['selectfield'])) {
				$selectfield = test_input($_POST['selectfield']);
        		$sql = "SELECT $selectfield FROM teams";
        		$result = $conn->query($sql);
        		if($result === false) {
            		echo "Error: ". $conn->error;
        		} else {
            		$result->data_seek(0); 
            		while($row = $result->fetch_assoc()) {
                		echo $row[$selectfield] .'<br>';
            		}
         		}
				$result->free(); 
			}
		?>
		
		<hr>
		
		<h2>Requirement #03</h2>
		
		<?php
			include "credentials.php";
			
			$checkErr = '';
		
			if (isset($_POST["req3"])) {
				if(!isset($_POST['column'])) {
					$checkErr = "Select at least one fieldname!";
				} else {	
					$checkErr = '';
					$column = $_POST['column'];
    				$fields = array();
    				foreach ($column as $value) {
        				$fields[] = $value;
    				}
		
        			for ($i = 0; $i < count($fields); $i++) {
            			$sql = "SELECT $fields[$i] FROM teams";
            			$result = $conn->query($sql);
            			if ($result === FALSE) {
               	 			echo "Error: " . $conn->error;
            			} else {
                			$result->data_seek(0);
                			while ($row = $result->fetch_assoc()) {
                   	 			echo $fields[$i] ."-". $row[$fields[$i]] . '<br>';
                			}
                			echo '<br>';
           			 	}
    				}
    			}
        	}
        	$conn->close();
		?>
		
		<form action="index.php" name="checkfield" method="post">
			Click a checkbox for a fieldname to receive ALL of the data for that field: <br><br>
            <input type="checkbox" name="column[]" value="teamname">teamname &nbsp;
      		<input type="checkbox" name="column[]" value="city">city &nbsp;
            <input type="checkbox" name="column[]" value="bestplayer">bestplayer &nbsp;
            <input type="checkbox" name="column[]" value="yearformed">yearformed &nbsp;
			<input type="checkbox" name="column[]" value="website">website &nbsp;
			<input type="hidden" name="req3" value="req3">
        	<input type="submit" value="Submit">
        	<span class="error"><?php echo $checkErr;?></span>
		</form><br><br>
		
		<hr>
		
		<h2>Requirement #04</h2>
		
		<?php
			include "credentials.php";
    		
    		$query = mysqli_query($conn, 'SELECT * FROM teams');
    		echo "<table class='center'><tr><th>teamname</th><th>city</th>
    		<th>bestplayer</th><th>yearformed</th><th>website</th></tr>";
    		while($row = $query->fetch_array()) {
    			echo "<tr><td>". $row['teamname'] ."</td><td>". $row['city'] ."</td><td>". 
    			$row['bestplayer'] ."</td><td>". $row['yearformed'] ."</td><td>". $row['website'] ."</td></tr>";
    		}
    		echo "</table><br><br>";
    		$conn->close();
    	?>
    		
    	<form action="index.php" method="post">
		Choose a record to delete, based on the column attribute from the dropdown menu, 
		and the value for that field in the column:
        <select name="deletefield">
        	<option value=""></option>
            <option value="teamname">Team Name</option>
            <option value="city">City</option>
            <option value="bestplayer">Best Player</option>
            <option value="yearformed">Year Formed</option>
            <option value="website">Website</option>
        </select>
        <input type="text" name="deltxt">
        <input type="hidden" name="req4" value="req4">
        <input type="submit" value="Submit">
		</form><br>
		
		<?php
			$delField = '';
			$delAtt = '';
			
			include "credentials.php";
    		
    		if (isset($_POST['req4'])) {
    			$delField = test_input($_POST['deletefield']);
				$delAtt = test_input($_POST['deltxt']);

    			if (!(preg_match('/^[a-zA-Z]*$/',$delAtt) ||
       				preg_match('/(19|20)\d\d/', $delAtt) ||
        			preg_match('/^[a-zA-Z]+( [a-zA-Z]+)$/', $delAtt)||
        			preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]
        			*[-a-z0-9+&@#\/%=~_|]/i', $delAtt))) {
        			echo "Please enter valid field data.";
    			} else {
            		$sql = "DELETE FROM teams WHERE $delField=? LIMIT 1";
            		if ($stmt = $conn->prepare($sql)) {
                		$stmt->bind_param("s", $delAtt);
                		$stmt->execute();
                		if($conn->affected_rows > 0) {            
                			echo 'Record deleted.';
                		} else {                 
                			echo "<p class='error'>That data doesn't exist.</p>";      
                		}
            		}
            		$stmt->close();
        		}
        	} 
			$conn->close();
    	?>
    	
    	<hr>
    	
    	<h2>Requirement #05</h2>
    	
    	<?php
			include "credentials.php";
    		
    		$query = mysqli_query($conn, 'SELECT * FROM teams');
    		echo "<table class='center'><tr><th>teamname</th><th>city</th>
    		<th>bestplayer</th><th>yearformed</th><th>website</th></tr>";
    		while($row = $query->fetch_array()) {
    			echo "<tr><td>". $row['teamname'] ."</td><td>". $row['city'] ."</td><td>". 
    			$row['bestplayer'] ."</td><td>". $row['yearformed'] ."</td><td>". $row['website'] ."</td></tr>";
    		}
    		echo "</table><br><br>";
    		$conn->close();
    	?>
    	
    	<form action="index.php" method="post">
    	Choose a record to update. 
		<input type="number" name="id" min="1" required><br><br>
		Select the field you wish to change in the teams table from the dropdown menu,
		and then enter the new data you want the old data to be replaced with in the text box: <br><br>
        <select name="updatefield">
        	<option value=""></option>
            <option value="teamname">Team Name</option>
            <option value="city">City</option>
            <option value="bestplayer">Best Player</option>
            <option value="yearformed">Year Formed</option>
            <option value="website">Website</option>
        </select>
        
        <input type="text" name="updtxt">
        <input type="hidden" name="req5" value="req5">
        <input type="submit" value="Submit">
		</form><br>
		
		<?php
			$updField = $updAtt = $id = '';
			
			include "credentials.php";
    		
    		if (isset($_POST['req5'])) {
    			$updField = test_input($_POST['updatefield']);
				$updAtt = test_input($_POST['updtxt']);
				$id = test_input($_POST['id']);

    			if (!(preg_match('/^[a-zA-Z]*$/',$updAtt) ||
       				preg_match('/(19|20)\d\d/', $updAtt) ||
        			preg_match('/^[a-zA-Z]+( [a-zA-Z]+)$/', $updAtt)||
        			preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]
        			*[-a-z0-9+&@#\/%=~_|]/i', $updAtt))) {
        			echo "Please enter valid field data.";
    			} else {
            		$sql = "UPDATE teams SET $updField=? WHERE id=$id";
            		if ($stmt = $conn->prepare($sql)) {
                		$stmt->bind_param("s", $updAtt);
                		$stmt->execute();
                		if($conn->affected_rows > 0) {            
                			echo 'Record updated.';
                		} else {                 
                			echo "<p class='error'>Invalid input!</p>";      
                		}
            		}
            		$stmt->close();
        		}
        	} 
			$conn->close();
		?>
		
		<hr>
		
		<h2>Requirement #06</h2>
		
		<p>The following is a display of the first 3 rows of the 'teams' table: </p><br>
		
		<?php
			include "credentials.php";
			
			$query = mysqli_query($conn, 'SELECT * FROM teams LIMIT 3');
    		echo "<table class='center'><tr><th>teamname</th><th>city</th>
    		<th>bestplayer</th><th>yearformed</th><th>website</th></tr>";
    		while($row = $query->fetch_array()) {
    			echo "<tr><td>". $row['teamname'] ."</td><td>". $row['city'] ."</td><td>". 
    			$row['bestplayer'] ."</td><td>". $row['yearformed'] ."</td><td>". $row['website'] ."</td></tr>";
    		}
    		echo "</table><br><br>";
    		$conn->close();
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