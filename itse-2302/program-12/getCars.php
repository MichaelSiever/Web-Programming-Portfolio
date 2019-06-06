<?php
	# Michael Siever getCars.php

	$q = $_GET["q"];

	$xmlDoc = new DOMDocument();
	$xmlDoc->load("autodata.xml");

	$x = $xmlDoc->getElementsByTagName('make');

	for ($i = 0; $i < $x->length; $i++) {
  		//Process only element nodes
  		if ($x->item($i)->nodeType == 1) {
    		if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      			$y = ($x->item($i)->parentNode);
    		}
  		}
	}

	$car = ($y->childNodes);

	for ($i = 0;$i < $car->length; $i++) {
  		// Process only element nodes
  		if ($car->item($i)->nodeType == 1) {
    		echo("<b>" . $car->item($i)->nodeName . ":</b> ");
    		echo($car->item($i)->childNodes->item(0)->nodeValue);
    		echo("<br>");
  		}
	}
?> 