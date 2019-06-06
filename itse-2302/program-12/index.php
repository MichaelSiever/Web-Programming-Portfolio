<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Program 12: Michael T. Siever</title>
		<link href="program-12.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700" rel="stylesheet"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript" src="program-12.js"></script>
	</head>

	<body>
		<h1>Program 12</h1>
		
		<hr>
		
		<h2>Requirement #01</h2>
		
		<p>Start typing the title of a 2019 movie and suggestions will be made 
		live as you type: <p>
		
		<form>
    		Movie title: <input type="text" onkeyup="movieHint(this.value)">
    	</form>
    	
    	<p>Suggestions: <span id="txtHint"></span></p>
		
		<hr>
		
		<h2>Requirement #02</h2>
		
		<form>
			<select name="team" onchange="showTeam(this.value)">
  				<option value="">Select a team:</option>
  				<option value="1">Cowboys</option>
  				<option value="2">Patriots</option>
  				<option value="3">Steelers</option>
  				<option value="4">Packers</option>
  			</select>
		</form>
		
		<br>
		
		<div id="results2"><b>Team info will be listed here...</b></div>
		
		<hr>
		
		<h2>Requirement #03</h2>
		
		<form>
			Select a car:
			<select name="car" onchange="showCar(this.value)">
			<option value="">Select a car:</option>
			<option value="Honda">Honda</option>
			<option value="Toyota">Toyota</option>
			<option value="Mercedes">Mercedes</option>
			<option value="Ford">Ford</option>
			<option value="Dodge">Dodge</option>
			<option value="Porsche">Porsche</option>
			<option value="Chevrolet">Chevrolet</option>
			<option value="BMW">BMW</option>
			<option value="Hyundai">Hyundai</option>
			<option value="Jeep">Jeep</option>
			</select>
		</form>
		
		<br>
		
		<div id="carHint"><b>Car info will be listed here...</b></div>
		
		<hr>
		
		<h2>Requirement #04</h2>
		
		<p>Please note that the following text below resizes automatically in a responsive 
		manner depending on your browser window's size: </p>
		
		<p class="req4">RSS is used to provide news to either people or other organizations. 
		This is done by serving an "RSS feed" from a website. An RSS feed is simply a link to 
		an XML file that is structured in a certain way. The RSS specification tells us the 
		expected structure of the XML file. For example, the title, author, and description 
		tags are required, and so all RSS XML files will have at least these three tags.  
		Ajax passes over the work of processing the RSS XML file to the web browser, thus 
		reducing server load. Also, Ajax allows the user to have a more seamless web experience, 
		because we are able to fetch the entire RSS XML file from the server without having to 
		refresh the page. Lastly, Ajax is designed to handle XML files, so it's able to parse 
		RSS in a simple and elegant way.</p>
		
		<hr>
		
		<h2>Requirement #05</h2>
		
		<p class="req5">Polling is a traditional technique used by the vast majority of AJAX 
		applications. The basic idea is that the application repeatedly polls a server for data. 
		If you're familiar with the HTTP protocol, you know that fetching data revolves around a 
		request/response format. The client makes a request and waits for the server to respond 
		with data. If none is available, an empty response is returned.</p>
		
		<hr class="footer">
		
		<p>Another Awesome Site&trade; brought to you by Michael Siever &copy;</p>
		
		<footer>
			<div>
				<p><a href="../index.html">Return to Main ITSE 2302 Page</a></p>
			</div>
		</footer>
	</body>
</html>	