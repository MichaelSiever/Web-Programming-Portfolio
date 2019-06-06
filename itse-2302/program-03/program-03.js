// JavaScript equations and functions for Michael T. Siever Program 03

"use strict";

var $ = function (elementID) {
	return document.getElementById(elementID);
}

function Req1ReggaeExtrordiannaire() {
    var initStr = $("str1").value;
    var search = new RegExp($("searchStr1").value, "i");
    var result = search.test(initStr);

    if(result == true) {
        $("regex").innerHTML= "It's a match!";
    } else {
        $("regex").innerHTML= "I got nothing...";
    }
}

function Req2PutThatRegexInItsReplace() {
    var initStr = $("str2").innerHTML;
    var search = new RegExp($("startStr2").value, "g");
    var replacement = $("replaceStr2").value;
    var newStr = replacement.toString();

    $("replace_regex").innerHTML = initStr.replace(search, newStr);
}

function Req3DontCatchWithYourThrowingArm() {
    var result = $("guess_who");
    result.innerHTML = "";
    var guess = $("guess_num").value;
    try {
		if(guess == "") throw "is empty.";
        if(isNaN(guess)) throw "is not a number.";
        guess = Number(guess);
        if(guess > 7000) throw "is too high. You are "+ (guess - 7000) + " away.";
        if(guess < 200) throw "is too low. You are " + (200 - guess) + " away.";
	}
    catch(err) {
        result.innerHTML = "Input " + err + ".";
    }
    finally {
        $("guess_num").value = "";
    }
}

function Req4IDidntChooseTheDebugLife() {
    var debcon = 3 * 9;
    console.log(debcon);
    debugger;
    $("condeb").innerHTML = debcon; 
}

function Req5OpenSesame(num_click) {
    var styleWindow;
	if(num_click == 'uno') {
		window.open("styleGuide.html#uno","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'dos') {
		window.open("styleGuide.html#dos","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'tres') {
		window.open("styleGuide.html#tres","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'cuatro') {
		window.open("styleGuide.html#cuatro","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'cinco') {
        window.open("styleGuide.html#cinco","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'seis') {
        window.open("styleGuide.html#seis","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'siete') {
        window.open("styleGuide.html#siete","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'ocho') {
        window.open("styleGuide.html#ocho","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'nueve') {
        window.open("styleGuide.html#nueve","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'diez') {
        window.open("styleGuide.html#diez","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'once') {
        window.open("styleGuide.html#once","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'doce') {
		window.open("styleGuide.html#doce","styleWindow","location=1,scrollbars=1,height=500,width=500");
    }
}

function Req7RobertOpenheimer(num_click) {
    var styleWindow;
    if(num_click == 'uno') {
        window.open("bestPractices.html#uno","styleWindow","location = 1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'dos') {
        window.open("bestPractices.html#dos", "styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'tres') {
        window.open("bestPractices.html#tres", "styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'cuatro') {
        window.open("bestPractices.html#cuatro", "styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'cinco') {
        window.open("bestPractices.html#cinco", "styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'seis') {
        window.open("jsBestPra500ctices.html#seis", "styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'siete') {
        window.open("bestPractices.html#siete", "styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'ocho') {
        window.open("bestPractices.html#ocho","styleWindow", "location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'nueve') {
        window.open("bestPractices.html#nueve","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'diez') {
        window.open("bestPractices.html#diez","styleWindow","location=1,scrollbars=1,height=500,width=500");
    } else if(num_click == 'once') {
        window.open("bestPractices.html#once","styleWindow","location=1,scrollbars=1,height=500,width=500");
    }
}

function Req8GuessWhosComingToDinner() {
	var x = "";
	var objname = '{"restaurants":[' +
    '{"restaurantName":"Taco Bell", "cuisineType":"Tacos", "qualityRating":"4"},' +
    '{"restaurantName":"Kentucky Fried Chicken", "cuisineType":"Chicken", "qualityRating":"7"},' +
    '{"restaurantName":"Dominos", "cuisineType":"Pizza", "qualityRating":"6"},' +
    '{"restaurantName":"Whataburger", "cuisineType":"Hamburgers", "qualityRating":"10"}]}'

	var obj = JSON.parse(objname);
    
	for(var i in obj.restaurants) {
    	x += obj.restaurants[i].restaurantName + " is a restaurant that specializes in " 
    	+ obj.restaurants[i].cuisineType + ". On a scale of 1 to 10, I rank their " +
    	"food quality a " + obj.restaurants[i].qualityRating + "." + "<br>";
    }
    $("placesToEat").innerHTML = x;
}

function Req9AnyWayShapeOrForm() {
    var fname = document.forms["goodForm"]["firstname"].value;
    var lname = document.forms["goodForm"]["lastname"].value;
    if(fname == null || fname == "") {
		alert("First name must be filled out");
        return false;
    } else if(lname == null || lname =="") {
        alert("Last name must be filled out");
        return false;
    }
}

function Req11OverflowingWithKnowledge() {
    var txt = "";
    if($("overFlow").validity.rangeOverflow){
        txt = "Value too large.";
    } else {
        txt = "Input is valid!";
    }
    $("ranges").innerHTML = txt;
}

function Req11UnderflowingWithWealth() {
    var txt = "";
    if($("underFlow").validity.rangeUnderflow){
        txt = "Value too small.";
    } else {
        txt = "Input is valid!";
    }
    $("ranges").innerHTML = txt;
}

function Req11MissedOpportunities(){
    var txt = "";
    if($("missingNo").validity.valueMissing){
        txt = "No inputted value.";
    } else {
        txt = "Input is valid!";
    }
    $("ranges").innerHTML = txt;
}

function Req12TheLiteralObjectOfMyAffection() {
    var movieLibrary = {
        directorFirstName: $("dfname1").innerHTML,
        directorLastName: $("dlname1").innerHTML,
    	movie: $("movie1").innerHTML,
        releaseYear: $("year1").innerHTML}
    var result = "";
    for (var i in movieLibrary) {
        result += i + " : " + movieLibrary[i] + "; ";
    }
    alert("New object created: " + result);
    localStorage.setItem("movieLibrary", JSON.stringify(movieLibrary));
}

function Req12TheKeywordIsNew() {
    var movieLibrary2 = new Object();
    movieLibrary2.directorFirstName = $("dfname2").innerHTML;
    movieLibrary2.directorLastName = $("dlname2").innerHTML;
    movieLibrary2.movie = $("movie2").innerHTML;
    movieLibrary2.releaseYear = $("year2").innerHTML;
    var result = "";
    for (var i in movieLibrary2) {
        result += i + " : " + movieLibrary2[i] + "; ";
    }
    alert("New object created: " + result);
    localStorage.setItem("movieLibrary2", JSON.stringify(movieLibrary2));
}

function Req12UnderConstruction(firstName, lastName, movie, year) {
    this.directorFirstName = firstName;
    this.directorLastName = lastName;
    this.movie = movie;
    this.releaseYear = year;
}

function Req12InstantMovie() {
    var dfname = $("dfname3").innerHTML;
    var dlname = $("dlname3").innerHTML;
    var movie = $("movie3").innerHTML;
    var year = $("year3").innerHTML;
    var movieInstance = new Req12UnderConstruction(dfname, dlname, movie, year);
    var result = "";
    for (var i in movieInstance) {
        result += i + " : " + movieInstance[i] + "; ";
    }
    alert("New object created: " + result)
    localStorage.setItem("movieInstance", JSON.stringify(movieInstance));
}

function Req12MovieArray() {
    var retrievedMovieLibrary = localStorage.getItem('movieLibrary');
    var movieLibrary = JSON.parse(retrievedMovieLibrary);

    var retrievedMovieLibrary2 = localStorage.getItem('movieLibrary2');
    var movieLibrary2 = JSON.parse(retrievedMovieLibrary2);

    var retrievedMovieInstance = localStorage.getItem('movieInstance');
    var movieInstance = JSON.parse(retrievedMovieInstance);
    
    var arrayAdd = new Array();
    arrayAdd[0] = movieLibrary;
    arrayAdd[1] = movieLibrary2;
    arrayAdd[2] = movieInstance;
    
	var x = "";
    for (var i = 0; i < arrayAdd.length; i++) {
        x += "Movie " + (i + 1) + ": Movie Title: " + arrayAdd[i].movie + ", " +
        "Director's first name: " + arrayAdd[i].directorFirstName + ", " +
        "Director's last name: " + arrayAdd[i].directorLastName + ", " +
        "Release year: " + arrayAdd[i].releaseYear + "<br>";
    }
    $("movieArray").innerHTML = x;
}

function Req13BoxOfficeRecord() {
	var x = "";
    var retrievedMovieLibrary2 = localStorage.getItem('movieLibrary2');
    var movieLibrary2 = JSON.parse(retrievedMovieLibrary2);
    var boxOffice = $("addBoxOffice").innerHTML;
    var amount = $("boxOfficeTotal").innerHTML;
    movieLibrary2.boxOffice = amount;
    alert("New property added: " + JSON.stringify(movieLibrary2));
    localStorage.setItem("newMovieLibrary2", JSON.stringify(movieLibrary2));
    x = "Movie 2: Movie Title: " + movieLibrary2.movie + ", " +
        "Director's first name: " + movieLibrary2.directorFirstName + ", " +
        "Director's last name: " + movieLibrary2.directorLastName + ", " +
        "Release year: " + movieLibrary2.releaseYear + ", " +
        "Worldwide Box Office Total: " + movieLibrary2.boxOffice + "<br>";
    $("newProp").innerHTML = x;
}

function Req13BombedTheBoxOffice() {
	var x = "";
    var newRetrievedMovieLibrary2 = localStorage.getItem('newMovieLibrary2');
    var movieLibrary2 = JSON.parse(newRetrievedMovieLibrary2);

    delete movieLibrary2.boxOffice;
    alert("New property deleted: " + JSON.stringify(movieLibrary2));
    x = "Movie 2: Movie Title: " + movieLibrary2.movie + ", " +
        "Director's first name: " + movieLibrary2.directorFirstName + ", " +
        "Director's last name: " + movieLibrary2.directorLastName + ", " +
        "Release year: " + movieLibrary2.releaseYear + ", " +
        "Domestic Box Office Total: " + movieLibrary2.boxOffice + "<br>";
    $("newProp").innerHTML = x;
}

function Req14BuildAircraft(manufacturer, model, speed, pilotName) {
    this.manufacturer = manufacturer;
    this.aircraftModel = model;
    this.topSpeed = speed;
    this.nameOfPilot = pilotName;
    this.changeSpeed = function(speed) {
        this.topSpeed = speed;
    }
}

function Req14NeedForSpeedChanges() {
    var aircraft1 = new Req14BuildAircraft("Boeing", "B747", 700, "Otto Pilot");
    alert("New Object created. " + aircraft1.manufacturer + " " + aircraft1.aircraftModel +
    " piloted by " + aircraft1.nameOfPilot + " has a top speed of " + aircraft1.topSpeed + " knots per hour.");

    var newSpeed = Number($("speedAmount").value) + aircraft1.topSpeed;
    aircraft1.changeSpeed(newSpeed);

    $('plane').innerHTML = "The " + aircraft1.manufacturer + " " + aircraft1.aircraftModel +
    " is now currently traveling at a speed of " + aircraft1.topSpeed + " knots per hour.";

    localStorage.setItem("newAircraft1", JSON.stringify(aircraft1));
}

var aircraft2 = new Req14BuildAircraft("Boeing", "B777", 800, "Anita Pilot");

function Req15GoGoPowerRangers() {
    Req14BuildAircraft.prototype.range = 15000;
    $("HomeDownOnTheRange").innerHTML = "This aircraft has a range of " + aircraft2.range + ".";
}

function Req15NowYoureFlyingWithGas() {
    Req14BuildAircraft.prototype.addFuel = function(gas) {
        this.range += gas * 2;
    }   
    var fillerUp = parseInt($("fuelAmount").value);
    aircraft2.addFuel(fillerUp);
    $("PassingGas").innerHTML = "You have now added enough fuel to the aircraft to increase "
    + " its range to " + aircraft2.range + ".";
}