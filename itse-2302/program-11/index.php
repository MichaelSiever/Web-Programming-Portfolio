<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 11: Michael T. Siever</title>
		<link href="program-11.css" rel="stylesheet">
		<script type="text/javascript" src="program-11.js"></script>
	</head>

	<body onload="displayURL(); sizeMonitorsNot()">
		<h1>Program 11</h1>
		
		<hr>
		
		<h2>Requirement #01</h2>
		
		<p>Below are 20 divs of that each change their sizes 
		upon load/reload of the page: </p><br><br>
		
		<?php
			$colors = array('ff6347', 'bdb76b', 'afeeee', '483d8b',
            '9932cc', 'c71585', '2f4f4f','daa520',
            'ffa07a', 'ddcc00', 'ffd700', 'ffe4b5',
            '228b22', '008080', 'e6e6fa', 'ff69b4',
            'f0fff0', 'c0c0c0', '000000', 'd2b48c');
		?>
		
		<div>
    		<?php
    			for ($i = 0; $i < 20; $i++) {
        			$sizew = rand(30, 100);
        			$sizeh = rand(50, 200);
    		?>
    		
        	<div id="div<?=$i+1?>" style="background-color:#<?=$colors[$i]?>; 
        	width:<?=$sizew?>%; height:<?=$sizeh?>px"></div>
        	
        	<?php
    			}
    		?>
    		
		</div>
		
		<hr>
		
		<h2>Requirement #02</h2>
		
		<p>Below is the URL of the current page by using the window.location object</p>
		
		<p id="req2_paragraph" class="req2"></p>
		
		<p>Click appropriate button to go back or forward.<br><br> (Hint: Click 
		on the button in Requirement 7 to go to a new page. Then, click 
		the <br>"go back" (<-) button in the top left of your browser window
		or swipe left on your<br> trackpad to return to this page to 
		test the full functionality of the Forward button): <br><br>
		<button onclick="goBack()">Back</button>
    	<button onclick="goForward()">Forward</button></p>
		
		<p>Cookies enabled?<button onclick="cookieStatus()">Click</button><br><br>
    	Java enabled?<button onclick="javaStatus()">Click</button></p>
    	
    	<p id="req2_paragraph2" class="req2"></p>
    	
    	<p id="req2_paragraph3" class="req2"></p>
		
		<hr>
		
		<h2>Requirement #03</h2>
		
		<p>Click to change the colors of the divs above using an xml file: &nbsp;
    	<button onclick="abracaDIVra()">Change div colors</button></p>
    	
    	<hr>
    	
    	<h2>Requirement #04</h2>
    	
    	Please set a frequency of color changes: Every
		<input type="number" id="time" min="1" max="100" required> seconds.
		
		<p><button onclick="setTimer()">ON/OFF</button>
		<p id="printit"></p>
		</p>
		
		<hr>
		
		<h2>Requirement #05</h2>
		
		<p>The following are the first 5 color values: </p>
		
		<?php
    		if(file_exists("divcolors.xml")) {
        		$xml = simplexml_load_file("divcolors.xml");
        		echo $xml->div1->color1 . "<br>";
        		echo $xml->div2->color2 . "<br>";
       			echo $xml->div3->color3 . "<br>";
        		echo $xml->div4->color4 . "<br>";
        		echo $xml->div5->color5 . "<br>";
   			}
		?>

		<hr>
		
		<h2>Requirement #06</h2>

		<p id="result6"></p>

		<hr>
		
		<h2>Requirement #07</h2>

		Click button to head to a new url in this window:
		<button onclick="iCastThyOut()">New URL</button>

		<hr>
		
		<h2>Requirement #08</h2>
		
		<p>Create two cookies:
   		<button onclick="writeCookie('name','Michael',7)">Create Cookie #1</button>
    	<button onclick="writeCookie('favorite','pizza',7)">Create Cookie #2</button></p>
	
		<p>Delete these cookies:
    	<button onclick="deleteCookie('name')">Delete Cookie #1</button>
    	<button onclick="deleteCookie('favorite')">Delete Cookie #2</button></p>
		
		<hr>
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="../index.html">Return to Main ITSE 2302 Page</a></p>
			</div>
		</footer>
	</body>
</html>		