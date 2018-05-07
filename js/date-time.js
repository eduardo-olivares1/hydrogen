var printTime = setInterval(Timer, 1000);
var index = 0;

function Timer() {
    var d = new Date();
    document.getElementById("time").innerHTML = "<h2 class='text-center'>" + d.toLocaleDateString() + " "  + d.toLocaleTimeString() + "</h2>";
    var s = d.getSeconds();
    if (s % 5 == 0 || s ==  0 ){
    index += 1
    document.getElementById("bad-count").innerHTML = "<h3 class='text-center'> Incorrect Translations made since visit: <strong> " +index + "</strong></h3>";
		}
        }
