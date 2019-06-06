
<?php
	# Michael Siever movieHints.php

	// Array with names
	$a[] = "Dumbo";
	$a[] = "Aladdin";
	$a[] = "The Lion King";
	$a[] = "Toy Story 4";
	$a[] = "Captain Marvel";
	$a[] = "Shazam";
	$a[] = "Avengers: Endgame";
	$a[] = "John Wick: Chapter 3";
	$a[] = "Once Upon a Time in Hollywood";
	$a[] = "Star Wars: The Rise of Skywalker";

	// get the q parameter from URL
	$q = $_REQUEST["q"];

	$hint = "";

	// lookup all hints from array if $q is different from ""
	if ($q !== "") {
    	$q = strtolower($q);
    	$len=strlen($q);
    	foreach($a as $name) {
        	if (stristr($q, substr($name, 0, $len))) {
            	if ($hint === "") {
                	$hint = $name;
            	} else {
                	$hint .= ", $name";
            	}
        	}
    	}
	}

	// Output "no suggestion" if no hint was found or output correct values
	echo $hint === "" ? "no suggestion" : $hint;
?> 