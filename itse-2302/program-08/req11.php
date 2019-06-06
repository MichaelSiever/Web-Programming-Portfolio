<?php 
	# Michael Siever's req11.php code

	if ("POST" == $_SERVER["REQUEST_METHOD"] && isset($_POST["req11"])) {
		$dir = "files/";
		$filename = $_POST['filename'];

		$dirFile = $dir.$filename;

		$checkfile = fopen($dirFile, "r") or die("File Not Found.");
		echo "Contents of the file: "."<br><br>";
		echo fread($checkfile,filesize($dirFile));
		fclose($checkfile);
	}
?>