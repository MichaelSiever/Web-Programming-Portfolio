// JavaScript for Requirement 12

window.addEventListener('resize', Req12KarmaChameleon);
function Req12KarmaChameleon() {
	document.body.style.backgroundColor = "#"+Math.floor(Math.random()*16777215).toString(16);
}
    		
function Req12GoingBackToSchool() {
	window.location.href = "index.html";
}