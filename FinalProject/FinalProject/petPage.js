//The code for this function was found on https://stackoverflow.com/questions/31954089/how-can-i-reuse-a-navigation-bar-on-multiple-pages
$(function(){
   $("#nav").load("header.html"); 
});

$(document).ready(function(){
    $(".draggable").draggable(); 
});

var hungerBlockCount = 7;
var funBlockCount = 7; 
var loveBlockCount = 7;

function barCount() {
    if(hungerBlockCount != 0) {
        document.getElementById('h' + hungerBlockCount).style.display = 'none';
        hungerBlockCount--; 
    }
     if(funBlockCount != 0) {
        document.getElementById('f' + funBlockCount).style.display = 'none';
        funBlockCount--; 
    }
    if(loveBlockCount != 0){
        document.getElementById('l' + loveBlockCount).style.display = 'none';
        loveBlockCount--; 
    }
}

setInterval(barCount, 10000);

function getContent() {  
    document.getElementById("bunnyName").innerHTML = "Loading...";
   
    var xmlHttp = new XMLHttpRequest();
            
    xmlHttp.onload = function() { //takes care of checking for 4
        if(xmlHttp.status == 200){
            document.getElementById("bunnyName").innerHTML = xmlHttp.responseText;
        }
    }
    
    var firstName = document.getElementById("firstName").value; 
    
    var reqURL = "petPage.php?firstName=" + encodeURIComponent(firstName) + "&function1=" + "nameFunction";
            
    xmlHttp.open("GET", reqURL, true);
    
    xmlHttp.send();
}


$(document).ready(function() {
    var object = $(".draggable").draggable();
    $("#middleDiv").droppable({
    drop: function( event, ui ) {
        var item = ui.draggable;
        if(event.toElement.alt == "food"){
            if(hungerBlockCount != 7){
                hungerBlockCount++;   
                document.getElementById('h' + hungerBlockCount).style.display = 'block';  
            }
        }
        if(event.toElement.alt == "fun"){
            if(funBlockCount != 7){
                funBlockCount++;
                document.getElementById('f' + funBlockCount).style.display = 'block'; 
            }
        }
        if(event.toElement.alt == "love"){
            if(loveBlockCount != 7){
                loveBlockCount++;
                document.getElementById('l' + loveBlockCount).style.display = 'block'; 
            }
        }
      }
    });
});
