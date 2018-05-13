var printTime = setInterval(Timer, 1000);
var index = 0;

function Timer() {
    var d = new Date();
    document.getElementById("time").innerHTML = "<div class='col-md-12'><h2 class='text-center'><strong>" + d.toLocaleDateString() + " "  + d.toLocaleTimeString() + "</strong></h2></div>";
    var s = d.getSeconds();
    if (s % 5 == 0 || s ==  0 ){
    index += 1
    document.getElementById("bad-count").innerHTML = "<div class='col-md-12'><h3 class='text-center'> Incorrect Translations made since visit: <strong> " +index + "</strong></h3></div>";
		}
        }
