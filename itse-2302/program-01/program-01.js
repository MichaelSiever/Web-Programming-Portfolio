// JavaScript Functions for Michael T. Siever Program 1
var $ = function (elementID) {
	return document.getElementById(elementID);
}

function Req1LightOnOff() {
	var pic = $("Light Bulb");
	if (pic.src.match("bulb_is_off")) {
		pic.src = "images/pic_bulb_is_on.gif";
	} else {
		pic.src = "images/pic_bulb_is_off.gif";
	}
}

function Req2DateTimeChange() {
	 var dt = new Date(); // Calls built-in new Date/Time function
     $("DT Change").innerHTML = dt;
}

function Req7ClearPage() {
	var x = document.body;
	document.write("<p></p>");
	document.write("<body style='text-align: center; background-color: yellow;'><p>Page Cleared." + 
	" Click <a href='index.html'>here</a> to go return to the previous page.</p></body>");
}

function Req8TextTransform() {
	var y = $("changeText");
	y.style.color = "crimson";
	y.style.fontSize = "30px";
	console.log(y.innerHTML);
}

function Req9GetLocation() {
	var x = $("coordinates");
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(Req9ShowPos);
	} else { 
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function Req9ShowPos(position) {
	$("coordinates").innerHTML = "Latitude: " + position.coords.latitude
	+ "<br>Longitude: " + position.coords.longitude;
}

function Req10DoMath() {
	var first = parseInt($("first").value);
    var second = parseInt($("second").value);
    var sum = "First number plus second number: " + (first + second);
    var diff = "First number minus second number: " + (first - second);
    var prod = "First number times second number: " + (first * second);
    var quot = "First number divided by second number: " + (first / second);
    $("sum").innerHTML = sum;
    $("difference").innerHTML = diff;
    $("product").innerHTML = prod;
    $("quotient").innerHTML = quot;
}

function Req11StringAdd() {
    var first = $("primero").value;
    var second = $("segundo").value;
    $("AddString").innerHTML = "The two numeric strings concatenated together are "
     + (first + second) + ".";
}

function Req12RollTheDice() {
	var num = parseInt($("VivaLasVegas").value);
    var modulus = num % 2;
    var image = $("DiceDiceBaby");
    if(modulus == 0) {
         image.src="images/6Die.png" ;
    } else {
        image.src="images/5Die.png" ;
    }
}

function Req13CheckRepublic() {
    var checknum = parseInt($("ChecksMarksTheSpot").value);
    if($("PlusOne").checked  == true) {
        checknum += 1;
    } if($("TakeAwayOne").checked == true) {
        checknum -= 1;
    }
    $("Checkmate").innerHTML = "The value of the number you entered is now: " + checknum;
}

function Req14ChangeName() {
    var chosenname = $("SelectName").value;
    $("AndBingoWasHisNameO").innerHTML = chosenname;

    console.log(chosenname);
    if(chosenname == "Name 1") {
        $("AndBingoWasHisNameO").style.color="olive";
    } else if(chosenname == "Name 2") {
        $("AndBingoWasHisNameO").style.color="royalblue";
    } else if(chosenname == "Name 3") {
        $("AndBingoWasHisNameO").style.color="crimson";
    } else if(chosenname == "Name 4") {
        $("AndBingoWasHisNameO").style.color="darkgreen";
    }
}

function Req15StopDropAndRoll(ev) {
  ev.preventDefault();
}

function Req15MajorDragMan(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function Req15DropAndGiveMeFifty(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild($(data));
}

function Req16BackChange() {
    $("ChChChChanges").style.backgroundColor="#FF6347"
}

function Req16ChangeBack() {
    $("ChChChChanges").style.backgroundColor="#ffffff"
}