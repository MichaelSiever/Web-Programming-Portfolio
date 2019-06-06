<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michael T. Siever file_uploader.php</title>
		<link href="program-08.css" rel="stylesheet">
	</head>
		
	<body>
		<h1>file_uploader.php</h1>
		
		<hr>
		
		<?php 
			$target_dir = "files/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if file already exists
			if (file_exists($target_file)) {
    			echo "<p class='error'>Sorry, file already exists.</p>";
    			echo "<br>";
    			$uploadOk = 0;
			}

			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 100000) {
			    echo "<p class='error'>Sorry, your file is too large.</p>";
			    echo "<br>";
			    $uploadOk = 0;
			}
			echo "<br>";

			// Allow only .txt formats
			if($fileType != "txt") {
			    echo "<p class='error'>Sorry, only TXT files are allowed.</p>";
			    echo "<br>";
    			$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "<p class='error'>Sorry, your file was not uploaded.</p>";
			    echo "<br>";
			// if everything is ok, try to upload file
			} else {
    			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        			echo "<p class='valid'>The file ". 
        			basename($_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
        			echo "<br>";
    			} else {
        			echo "<p class='error'>Sorry, there was an error uploading your file.</p>";
        			echo "<br>";
    			}
			}
		?>
		
		<hr>
			
		<a href="index.php">Go Back</a>
	</body>
</html>