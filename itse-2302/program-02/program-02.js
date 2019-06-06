// JavaScript equations and functions for Michael T. Siever Program 02
var $ = function (elementID) {
	return document.getElementById(elementID);
}

onload = Req1GoingForStroke;

function Req1GoingForStroke() {
	var c = $("myCanvas");
	var ctx = c.getContext("2d");

	ctx.font = '40px serif';
	ctx.strokeText("Hi-dilly-ho,", 52.5, 65);
	ctx.strokeText("neighborino!", 45, 105);
}

function Req2ParagraphConcatSaysMeow() {
	var concparag = ($("text1").value) + " " + ($("text2").value);
    $("paragraph").innerHTML = concparag;
}

function Req4ImGoingToTheLocalStorage() {
	if (typeof (Storage) !== "undefined") {
        localStorage.firstStore = $("text1").value;
        localStorage.secondStore = $("text2").value;
        alert("stored");
    } else {
		$("in_storage").innerHTML = "Sorry, your browser doesn't support web storage.";
    }
}

function Req4LocalGoldenRetriever1() {
	var first_is_the_worst = $("in_storage").innerHTML;
    if (first_is_the_worst == "") {
        $("in_storage").innerHTML = localStorage.firstStore;
    } else {
        $("in_storage").innerHTML = first_is_the_worst + "<br>" + (localStorage.firstStore);
    }
}

function Req4LocalLabradorRetriever2() {
	var second_is_the_best = $("in_storage").innerHTML;
    if (second_is_the_best == "") {
        $("in_storage").innerHTML = localStorage.secondStore;
    } else {
        $("in_storage").innerHTML = second_is_the_best + "<br>" + (localStorage.secondStore);
    }
}

function Req4LocalGarbageRemoval() {
	alert("Removing...");
    localStorage.removeItem("firstStore");
    localStorage.removeItem("secondStore");
    alert("Removed!");
}

function Req5MatchboxTwenty() {
	var textmatch = $("matchtext").value;
    var stringmatch = $("matchbox").value;
    var theresWaldo = textmatch.search(stringmatch);
    if (theresWaldo != -1) {
        $("eureka").innerHTML = "I have found it!";
    } else {
        $("eureka").innerHTML = "I've got nothing...";
    }
}

function Req6SliceOfLife() {
    var str = $("Stringbox").value;
    $("string_result").innerHTML = "Sliced section: " + str.slice(($("NumbaOne").value),($("NumbaTwo").value));
}

function Req6SubStringCheese() {
     var str = $("Stringbox").value;
     $("string_result").innerHTML = "Extracted section: " + str.substring(($("NumbaOne").value),($("NumbaTwo").value));
}

function Req6SubStrOperationDontTouchTheSides() {
    var str = $("Stringbox").value;
    $("string_result").innerHTML = "Extracted: " + str.substr(($("NumbaOne").value),($("NumbaTwo").value));
}

function Req7ThisMustBeTheReplace() {
    var string1 = $("string_to_replace").value;
    var string2 = $("replacement_string").value;
    var strSentence = $("life_sentence").value;
    var result = strSentence.replace(string1, string2);
    $("sent_res").innerHTML = "Result: " + result.toUpperCase();
}

function Req8StarrayOfSunshineAndDaisies() {
    var str = $("flow_str").value;
    var result = str.split("&");
    $("str_array_res").innerHTML = "Result is an array containing the following flowers: " + "<strong>" + result + "</strong>";
}

function Req9NoMoreClicksMakesMeASaaaaadPanda() {
    $("num_clicks").innerHTML =
        "You have clicked the Panda " + sessionStorage.clickcount + " time(s) this session!"
}

function Req9YouCanCountOnMe() {
    if(typeof(Storage) !== "undefined") {
        if(sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
        } else {
            sessionStorage.clickcount = 1;
        }
    } else {
        $("num_clicks").innerHTML = "Sorry, your browser doesn't support web storage";
    }
}

function Req10DivideAndConquer(){
    var result = parseInt($("uno").value) / parseInt($("dos").value);
    $("quotient").innerHTML = "Result: " + result;
}

function Req11KnightsOfTheRoundTable() {
    var mydiv = $("tabvals");
    var x = document.createElement("TABLE"); // Creates <table> element

    mydiv.appendChild(x);
    x.setAttribute("id", "myTable");

    var row = document.createElement("TR"); // Creates table row (<tr>) element
    x.appendChild(row);

    for(var i = 0; i < 3; i++) {
        var header = document.createElement("TH"); // Creates table header (<th>) element
        row.appendChild(header);
        header.setAttribute("id", "head" + i);
        switch (i) {
            case i = 0:
                var headerfill0 = document.createTextNode("Number()"); // First column name
                header.appendChild(headerfill0);
                break;
            case i = 1:
                var headerfill1 = document.createTextNode("parseInt()"); // Second column name
                header.appendChild(headerfill1);
                break;
            case i = 2:
                var headerfill2 = document.createTextNode("parseFloat()"); // Third column name
                header.appendChild(headerfill2);
                break;
        }
    }
	
    var row = document.createElement("TR");
    x.appendChild(row);

    for(var j = 0; j < 3; j++) {
        var data = document.createElement("TD");
        row.appendChild(data);
        data.setAttribute("id", "data" + j);
        switch (j) {
            case j = 0:
                var z = false;
                var data0 = document.createTextNode(Number(z)); // First column value, which will set "false" to "0"
                data.appendChild(data0);
                break;
            case j = 1:
                var z1 = "23.19";
                var data1 = document.createTextNode(parseInt(z1)); // Second column value, which will convert "23.19" to "23"
                data.appendChild(data1);
                break;
            case j = 2:
                var z2 = "23.19";
                var data2 = document.createTextNode(parseFloat(z2)); // Third column value, which will print "23.19" as is
                data.appendChild(data2);
                break;
        }
    }
}

function Req12ItsOnRandom() {
    var num1 = parseFloat(Math.floor(Math.random() * 7) + 1);
    var num2 = parseFloat(Math.floor(Math.random() * 223) + 33);
    var num3 = parseFloat(Math.floor(Math.random() * (723 - 572 + 1)) + 572);
   $("rand_nums").innerHTML = "Between 1 and 7: " + num1 + "<br>"
    + "Between 33 and 255: " + num2 + "<br>" + "Between 572 and 723: " + num3;
}

function Req13NowYourePlayingWithPower() {
    var base = parseFloat($("basenum").value);
    var expon = parseFloat($("exponent").value);
    var power = Math.pow(base, expon);
    $("exp_num").innerHTML = "Result: " + power;
}

function Req14ThisFeelsSoDated() {
    var long1 = new Date("February 9, 2019");
    var long2 = new Date("09 Feb 2019");
    var short1 = new Date("02/09/2019");
    var short2 = new Date("2019/02/09");
    $("dates").innerHTML = "'Long date': February 9, 2019 = " + long1 + "<br>" + "'Long date': 09 Feb 2019 = " + long2 + "<br>"
     + "'Short date': 02/09/2019 = " + short1 + "<br>" + "'Short date': 2019/02/09 = " + short2 + "<br>";
}

function Req15TheTablesHaveTurned() {
    var d = new Date();
    var dstr = d.toDateString();
    $("end_times").innerHTML = "Today's date: " + dstr;

    var today_day = d.getDate();
    $("data01").innerHTML = today_day;
    var today_mth = d.getMonth();
    $("data02").innerHTML = today_mth;
    var today_yr = d.getFullYear();
    $("data03").innerHTML = today_yr;

    var day_num = d.setDate(21); // Changes date to the 21st
    var day_set = new Date(day_num);
    $("data11").innerHTML = day_set;

    var mth_num = d.setMonth(11); // Changes month to December
    var mth_set = new Date(mth_num);
    $("data12").innerHTML = mth_set;

    var yr_num = d.setFullYear(2018); // Changes year to 2018
    var yr_set = new Date(yr_num);
    $("data13").innerHTML = yr_set;
}

function Req16AnotherDimensionNewGalaxyIntergalacticPlanetArray() {
    var planStr = $("my_planets").value;
    var result = planStr.split(",");
    localStorage.planetsArray = result;
    $("plArray").innerHTML = "The resulting array contains the following values: " + "<strong>" + result + "</strong>";
}

function Req16HeWillJoinUsOrDieMaster() {
    if($("my_planets").value == "") {
        $("plArray").innerHTML = "Please enter planets and convert first";
    } else {
        var pstore = localStorage.planetsArray.split(",");
        var join = pstore.join(", ");
        $("plArray").innerHTML = "Joined Array: " + "<strong>" + join + "</strong>";
    }
}

function Req17LosingOurMarbles() {
    var planStr = localStorage.planetsArray.split(",");
    planStr.splice(-2,2);
    $("replace_last_two_planets").innerHTML = "New Array: " + "<strong>" + planStr + "</strong>";
    localStorage.newPlanetsArray = planStr;
}

function Req17OhWaitFoundThem() {
    var newpstore = localStorage.newPlanetsArray.split(",");
    newpstore.push($("add_first_planet").value);
    newpstore.push($("add_second_planet").value);
    $("replace_last_two_planets").innerHTML = "New Array: " + "<strong>" + newpstore + "</strong>";
	localStorage.newPlanetsArray = newpstore;
}

function Req18RemoveTheStoneOfShame() {
    var planStr = localStorage.newPlanetsArray.split(",");
    planStr.shift();
    $("replace_first_planet").innerHTML = "New Array: " + "<strong>" + planStr + "</strong>";
    localStorage.newPlanetsArray = planStr;
}

function Req18AttachTheStoneOfTriumph() {
    var newpstore = localStorage.newPlanetsArray.split(",");
    newpstore.splice(0,0,$("add_one_planet").value);
    $("replace_first_planet").innerHTML = "New Array: " + "<strong>" + newpstore + "</strong>";
	localStorage.newPlanetsArray = newpstore;
}

function Req19NewThirdRockFromTheSun() {
    var planStr = localStorage.newPlanetsArray.split(",");
    planStr.splice(2, 0, $("new_planet_three").value);
    $("sorted_planets").innerHTML = "New Array: " + "<strong>" + planStr + "</strong>";
    localStorage.newPlanetsArray = planStr;
}

function Req19ThatsTheSortOfIt() {
    var newpstore = localStorage.newPlanetsArray.split(",");
    var sortarray = newpstore.sort(function(a, b){return a > b ? 1 : -1;});
    $("sorted_planets").innerHTML = "Sorted Array: " + "<strong>" + newpstore + "</strong>";
	localStorage.newPlanetsArray = sortarray;
}

function Req20ArraysOfHope() {
    var planStr = localStorage.newPlanetsArray.split(",");
    var newArray = planStr.slice(0,4);
    $("gemini_arrays").innerHTML = "Old Array: " + "<strong>" + planStr + "</strong>" + "<br>"
    + "New Array: " + "<strong>" + newArray + "</strong>";
}

function Req21CompareAndContrast() {
    var first = parseInt($("compare1").value);
    var second = parseInt($("compare2").value);

    if(first == second) {
        $("comparison").innerHTML = "The numbers are equal" + ".";
    } else if(first < second) {
        $("comparison").innerHTML = first + " is smaller than " + second + ".";
    } else {
            $("comparison").innerHTML = first + " is larger than " + second + ".";
    }
}

function Req22ItIsLogical() {
    var entry = parseFloat($("logic_num").value);
        if (isNaN(entry)) {
            $("logic").innerHTML ="Error: Submission was not a number. Please enter a number and try again.";
       } else {
            if (entry >= 3 && entry <= 55) {
                $("logic").innerHTML ="Your number is between 3 and 55.";
            } else if (!(entry >= 77 && entry <= 99)) {
                $("logic").innerHTML ="Your number is outside the range of 77 - 99.";
            } else {
                $("logic").innerHTML ="Your number is between 77 and 99.";
            }
        }
}

function Req23OohSomethingShiny() {
    var entry = $("metal").value.toLowerCase();
    
        if(entry == "platinum") {
            $("which_metal").innerHTML = "You found platinum.";
        } else if(entry == "gold") {
            $("which_metal").innerHTML = "You found gold.";  
        } else if(entry == "silver") {
            $("which_metal").innerHTML = "You found silver.";
        } else if(entry == "bronze") {
            $("which_metal").innerHTML = "You found bronze.";
        } else {
            $("which_metal").innerHTML = "Lead's not worth all that much. What a shame.";
        }
}

function Req24AndTheOscarGoesTo() {
    var entry = $("actor").value.toLowerCase();
    switch (entry) {
        case "denzel washington":
            $("which_actor").innerHTML = "Denzel Washington!";
            break;
        case "tom hanks":
            $("which_actor").innerHTML = "Tom Hanks!";
            break;
        case "leonardo dicaprio":
            $("which_actor").innerHTML = "Leonardo DiCaprio!";
            break;
        case "gary oldman":
            $("which_actor").innerHTML = "Gary Oldman!";
            break;
        default:
            $("which_actor").innerHTML ="Hey, Dwayne Johnson wasn't nominated! Oh, well, I guess everybody's got to have a fan club...";
    }
}

function Req25AnimalHouse() {
    var entry = $("animal").value.toLowerCase();
    switch (entry){
        case "bird":
        case "bat":
        case "bee":
            $("which_animal").innerHTML = "That animal flies.";
            break;
        case "dog":
        case "cat":
        case "pig":
        case "cow":
        case "horse":
            $("which_animal").innerHTML = "That animal runs.";
            break;
        case "slug":
        case "turtle":
        case "roach":
        case "lizard":
		case "human":
            $("which_animal").innerHTML = "That animal crawls.";
            break;
        default:
            $("which_animal").innerHTML = "You've discovered a brand new species! You'll be famous!";
    }
}

function Req26BoyAmIInForIt() {
	var txt = "";
    var store = localStorage.newPlanetsArray.split(",");
	var x
    for (x in store) {
       txt += store[x] + " ";
    }
	$("loop_de_loop").innerHTML = txt;
}

function Req26IveBeenDoingThisForAWhileLoop() {
	var txt = "";
    var store = localStorage.newPlanetsArray.split(",");
    var i = 0;
    while(i < 5) {
        txt += "<br>" + store[i] + " is planet number " + (i + 1);
		i++;}
	$("loop_de_loop").innerHTML = txt;
}
	
function Req26ShoopDoWhile() {
	var txt = "";
    var store = localStorage.newPlanetsArray.split(",");
    var i = 0;
    do {
        txt += (store[(store.length - (i + 1))] + " is the last planet in the array.");
        i++;
    } while (i < 1);
	$("loop_de_loop").innerHTML = txt;
}