function cssDefault() {
    
    var textareaObject = document.getElementById('CSS');
    textareaObject.style.boxShadow = "10px 10px 10px black"; 
    
    console.dir(textareaObject);
    
    textareaObject.value = "h3 {color: blue; text-align: center;}\np {font-family: cursive; font-size: 22pt; color: green;}";
}

function htmlDefault() {
    
    var textareaObject = document.getElementById('HTML');
    textareaObject.style.boxShadow = "10px 10px 10px black"; 
    
    console.dir(textareaObject);
    
    textareaObject.value ="<h3> Greetings! </h3>\n<p> Start by adding some HTML and CSS </p>";
}

function prompt1() {
 if (text=prompt("What do you want your title to be?", "New Title")){
     document.title = text;
     document.getElementById(title);
     document.getElementById('header').innerHTML = text;
 }
}

function getHTML() {
    var htmlObject = document.getElementById('HTML').value;	
    var previewObject = document.getElementById('rightWrapper');
    previewObject.innerHTML = htmlObject;
}

function getCSS() {
   var cssObject = document.getElementById('cssButton');
   var cssEditor = document.getElementById('CSS');
    
 if(cssObject.style.backgroundColor=="skyblue"){
     cssObject.style.backgroundColor="lightgrey";
     getHTML();
 }
 else{ 
    cssObject.style.backgroundColor="skyblue";
    var htmlObject = document.getElementById('HTML').value;	
    var previewObject = document.getElementById('rightWrapper');
    previewObject.innerHTML = '<style>' + cssEditor.value + '</style>' + htmlObject;
 }
}

function erase() {
    var cssBox = document.getElementById('CSS');
    var htmlBox = document.getElementById('HTML');
    var previewBox = document.getElementById('rightWrapper');
    cssBox.value = null;  
    htmlBox.value = null; 
    previewBox.value = null;   
    getHTML();
    getCSS();
}