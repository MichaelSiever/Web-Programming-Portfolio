<?php 
	# Michael Siever's req12.php code

	if ("POST" == $_SERVER["REQUEST_METHOD"] && isset($_POST["req12"])) {
		$numberGuess= test_input($_POST['numberGuess']);
		/*function test_input($data) {
    			$data = trim($data);
    			$data = stripslashes($data);
    			$data = htmlspecialchars($data);
    			return $data;
			}*/
		$min = 33;
        $max = 77;
        try {
            if (filter_var($numberGuess, FILTER_VALIDATE_INT,
            array("options" => array("min_range" => $min, "max_range" => $max))) 
            === false) {
            	throw new Exception ("Your guess isn't within range.");
            } else {
                echo "<br><p class='valid'>Your guess is within range.</p>";
            }
        } catch (Exception $exp) {
            echo "<br><p class='error'>Error: ". $exp->getMessage() ."</p>";
        }
    }
?>