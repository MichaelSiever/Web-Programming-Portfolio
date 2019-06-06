<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever validatecontrols.php</title>
		<link href="program-07.css" rel="stylesheet">
	</head>

	<body>
	
		<h1>validatecontrols.php</h1>
	
		<hr>
		
		<h2>Requirement #09</h2>

		<?php
			$r9name = filter_input(INPUT_POST, "name");
			$r9email = filter_input(INPUT_POST, "email");
			$r9website = filter_input(INPUT_POST, "website");
			$r9devtype = filter_input(INPUT_POST, "devtype");
			
			$valid = true;
			$nameErr = $emailErr = $websiteErr = $devtypeErr = "";
			$name = $email = $website = $devtype = "";
			
			if(filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST") {    
    			if(empty($r9name)) {
        			$nameErr = "Name is required";
        			$valid = false;
    			} else {
        			$name = validate_input($r9name);
        			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            			$nameErr = "Only letters and white space allowed";
            			$valid = false;
        			}
    			}
    			
    			if(empty($r9email)) {
        			$emailErr = "Email is required";
        			$valid = false;
    			} else {
        			$email = validate_input($r9email);
        			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  						$emailErr = "Invalid email format";
  						$valid = false;
					}
    			}
    			
    			if (empty($r9website)) {
        			$websiteErr = "Website is required";
        			$valid = false;
    			} else {
        			$website = validate_input($r9website);
        			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  						$websiteErr = "Invalid URL";
  						$valid = false;
  					}
    			}
    			
    			if (empty($r9devtype)) {
    				$devtypeErr = "Developer type is required";
    				$valid = false;
    			} else {
        			$devtype = validate_input($r9devtype);
        		}
			}
			
			function validate_input($data) {
        		$data = trim($data);
        		$data = stripslashes($data);
        		$data = htmlspecialchars($data);
        		return $data;
    		}		
    	?>
		
		<p><span class="error">* Required field.</span></p>
		
		<form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			Name:
        	<input type="text" name="name" value="<?php echo $name;?>">
        	<span class="error">* <?php echo $nameErr;?></span>
    		<br><br>
			Email:
            <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Website:
            <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error">* <?php echo $websiteErr;?></span>
			<br><br>
			Developer Type: <span class="error">* <?php echo $devtypeErr;?></span><br>
    		<input type="radio" name="devtype" value="Front End" 
    		<?php if(isset($_POST["devtype"]) && $_POST["devtype"] == "Front End") 
    		echo "checked";?>>Front End<br>
        	<input type="radio" name="devtype" value="Server Side" 
        	<?php if(isset($_POST["devtype"]) && $_POST["devtype"] == "Server Side")
    		echo "checked";?>>Server Side<br>
        	<input type="radio" name="devtype" value="Full Stack" 
        	<?php if(isset($_POST["devtype"]) && $_POST["devtype"] == "Full Stack")
    		echo "checked";?>>Full Stack<br>
        	<br>
        	<?php if (isset($_POST["devtype"]) == "true") echo $_POST["devtype"] ." was selected";?>
    		<br>
    		<input type="submit" name="r9submit" value="Submit">
		</form>
		
		<hr>
		
		<?php
			if (filter_input(INPUT_SERVER, "REQUEST_METHOD") !== "POST") {
				echo "Click 'Submit' button when you are ready";
			} else if (filter_input(INPUT_SERVER, "REQUEST_METHOD") == "POST" && $valid == false) {
				echo "Please input only valid information for all of the starred (*) fields/radios";
			} else {
				echo "<h2>Your Input:</h2>".
    			"<p>Name: $name<br>".
    			"E-mail: $email<br>".
    			"Website: $website<br>".
    			"Developer Type: $devtype<br></p>";
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