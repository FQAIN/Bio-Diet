function openNav() {
	document.getElementById("mySidenav").style.width = "300px";
	document.getElementById("main").style.marginLeft = "300px";
	document.body.style.backgroundColor = "white";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "white";
}

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  }
  
   $(".num").counterUp({delay: 10, time: 1000});