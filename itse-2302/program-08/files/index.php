<?php
	session_start();
	include 'header.php';
	include 'footer.php';
	$cookie_name = "itse2302001015";
	$cookie_value = 4815162342;
	setcookie($cookie_name, $cookie_value, time()
    	+ (86400 * 365),"/");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 8: Michael T. Siever</title>
		<link href="program-08.css" rel="stylesheet">
	</head>

	<body>
		<h1>Program 08</h1>
		
		<hr>
		
		<h2>Requirement #01</h2>
		
		<?=$dateTime?><br><br>
		<?=$copy?>

		<hr>
		
		<h2>Requirement #02</h2>
		
    	<?php include 'menu.php';?>
    	
    	<hr>
    	
    	<h2>Requirement #03</h2>

    	<p>Here are lists of the 5 most popular foods in each of the four regions
    	(North, South, East, and West) of the country: </p>

		<?php
			$regions = array(
        		'North'=>array(
                	'steak',
                	'pork ribs',
                	'Philly cheesesteak sandwiches',
                	'pizza',
                	'Reubens'),
            	'South'=>array(
                	'chicken fried steak',
                	'potato salad',
                	'tacos',
                	'brisket',
                	'mac & cheese'),
            	'East'=>array(
                	'crab',
                	'cod',
                	'lobster',
                	'clams',
                	'pasta'),
            	'West'=>array(
                	'avacados',
                	'granola',
                	'ramen',
                	'sushi',
                	'fish tacos')
        	);
        	
        	foreach($regions as $region=>$food) {
            	echo $region.":<br><br>";
            	foreach($regions[$region] as $food) {
                	echo $food."<br>";
                }
                echo "<br>";
            }
        ?>
        
        <hr>
        
        <h2>Requirement #04</h2>
        
        <?php
    		$firstfile = file_get_contents("files/Street_Names.txt");
    		$secondfile = file_get_contents("files/Street_Descriptions.txt");
		?>
		
    	<?=$firstfile?>
    	<br><br>
		<?=$secondfile?>
  		
  		<hr>
  		
  		<h2>Requirement #05</h2>
  		
		<?php
			if ("POST" == $_SERVER["REQUEST_METHOD"] && isset($_POST["req5"])) {
    			$landmark1 = test_input($_POST['landmark1']);
    			$landmark2 = test_input($_POST['landmark2']);
    			$landmark3 = test_input($_POST['landmark3']);
    			$landmark4 = test_input($_POST['landmark4']);
			}
			
			function test_input($data) {
    			$data = trim($data);
    			$data = stripslashes($data);
    			$data = htmlspecialchars($data);
    			return $data;
			}
		?>
		
    	
    	<form method="post">
    	Enter 4 Austin landmarks:<br>
        	#1:<label for="landmark1">
            	<input type="text" name="landmark1" 
            	action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" required>
            	</label>&nbsp;&nbsp;
        	#2:<label for="landmark2">
            	<input type="text" name="landmark2"
            	action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" required>
            	</label>&nbsp;&nbsp;
        	#3:<label for="landmark3">
            	<input type="text" name="landmark3"
            	action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" required>
            	</label>&nbsp;&nbsp;
        	#4:<label for="landmark4">
        		<input type="text" name="landmark4"
        		action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" required>
        		</label>
        	<input type="hidden" name="req5" value="req5">
        	<input type="submit">
    	</form>

		<?php
			$myFile = fopen("files/landmarks.txt","r+") or die("Unable to open file!");
    		if(isset($landmark1,$landmark2,$landmark3,$landmark4)) {
        		$txt = $landmark1 . "\n";
        		fwrite($myFile, $txt);
        		$txt = $landmark2 . "\n";
        		fwrite($myFile, $txt);
        		$txt = $landmark3 . "\n";
        		fwrite($myFile, $txt);
        		$txt = $landmark4 . "\n";
        		fwrite($myFile, $txt);
        		fclose($myFile);
    		}
		?>
  		
  		<hr>
  		
  		<h2>Requirement #06</h2>
  		
		<form method="post" action="file_uploader.php" enctype="multipart/form-data">
    		Select text file (.txt) to upload:
        		<input type="file" name="fileToUpload" id="fileToUpload">
    			<input type="submit" value="Upload File" name="submit">
    	</form>
    	
		<hr>
  		
  		<h2>Requirement #07</h2>

    	<p>Please note that if you are viewing this page for the first time,
    	you will have to refresh the page in order to set the cookie.</p>
    
		<?php
			if(!isset($_COOKIE[$cookie_name])) {
    			echo "Cookie named '". $cookie_name ."' is not set!";
			} else {
    			echo "Cookie named '". $cookie_name ."' is set!<br>";
    			echo "The value is: ". $_COOKIE[$cookie_name];
			}
		?>
		
		<hr>
		
		<h2>Requirement #08</h2>

		<?php
			$_SESSION['city'] = 'Austin';
			$_SESSION['state'] = 'Texas';
		?>
		
		Click to head to a new page and see the session variables that were set.
		<button onclick="location.href='session_display.php';">New Page</button><br>

		<hr>
  		
  		<h2>Requirement #09</h2>

		Here is a table of all of the PHP filters: <br><br>
		
		<table class="center">
  			<tr>
    			<td><b>Filter Name</b></td>
    			<td><b>Filter ID</b></td>
  			</tr>
  			
			<?php
				function displayPHPFilters() {
    				foreach(filter_list() as $id=>$filter) {
        				echo '<tr><td>' . $filter . '</td>
        				<td>' . filter_id($filter) . '</td></tr>';
    				}
				}
			
				displayPHPFilters();	
			?>
		</table>
		
		<hr>
  		
  		<h2>Requirement #10</h2>
			
		Enter the following:<br><br>
		<form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			Email: <input type="text" name="email" required> &nbsp;&nbsp; 
			<br><br>
			URL (Must use "http(s)//" format): <input type="text" name="url" required>
			<br><br>
			<input type="submit" value="submit">
    	</form>

		<?php
			if(isset($_POST['email']) && !empty($_POST['email'])) {
    			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    			if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
        			echo "<p class='valid'>$email is a valid email address.</p>";
    			} else { 
    				echo "<p class='error'>$email is not a valid email address.</p>";
        		}
			} 
			
			if(isset($_POST['url']) && !empty($_POST['url'])) {
    			$url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    			if(!filter_var($url,FILTER_VALIDATE_URL) === false) {
        			echo "<p class='valid'>$url is a valid URL.</p>";
    			} else { 
    				echo "<p class='error'>$url is not a valid URL.</p>";	
    			}
			} ?>
			
		<hr>
		
		<h2>Requirement #11</h2>
		
		<form method="post">
    		Enter file to locate. Please include extension:
    		<input type="text" name="filename" 
    		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" required>
    		<input type="hidden" name="req11" value="req11">
    		<input type="submit">
    	</form>
    	
    	<p><?php include "req11.php";?></p>
		
		<hr>
		
		<h2>Requirement #12</h2>

    	<form method="post">
    	Enter a number between 33 and 77 (inclusive): 
        	<input type="text" name="numberGuess" 
        	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" required>
        	<input type="hidden" name="req12" value="req12">
        	<input type="submit">
    	</form>
    	
    	<p><?php include "req12.php";?></p>
		
		<hr>
		
		<p><a href="../index.html">Return to Main Page</a></p>
	</body>
</html>