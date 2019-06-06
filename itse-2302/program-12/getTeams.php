<?php
	# Michael Siever getTeams.php
	
	$q = intval($_GET['q']);
	
	include 'credentials.php';
	
	mysqli_select_db($conn,"itse2302001015");
	$sql = "SELECT * FROM teams WHERE id = '".$q."'";
	$result = mysqli_query($conn,$sql);

	echo "<table class='center'>
			<tr>
				<th>ID</th>
				<th>Team Name</th>
				<th>City</th>
				<th>Best Player</th>
				<th>Year Formed</th>
				<th>Website</th>	
			</tr>";
		
		while($row = $result->fetch_array()) {
    		echo "<tr>";
    			echo "<td>" . $row['id'] . "</td>";
   				echo "<td>" . $row['teamname'] . "</td>";
    			echo "<td>" . $row['city'] . "</td>";
    			echo "<td>" . $row['bestplayer'] . "</td>";
    			echo "<td>" . $row['yearformed'] . "</td>";
    			echo "<td>" . $row['website'] . "</td>";
    		echo "</tr>";
		}
	echo "</table>";
	
	$conn->close();
?>
