function showIt(x) { 
    //Select name function
    if(x.options[x.selectedIndex].id=="nameID") {     
        nameFunction();
    }
    
    //Select hamming number function
    if(x.options[x.selectedIndex].id=="hammingNumberID") {   
        hammingNumber();
    }
    
    
    //Select anagram finder
    if(x.options[x.selectedIndex].id=="anagramFinderID") {
        anagramFinder();
    }
    
    //Select hypotenuse calculator 
    if(x.options[x.selectedIndex].id=="hypotenuseCalculatorID") {
        hypotenuseCalc();
    }
}

function nameFunction() {
    document.getElementById('name').style.display = 'block';
    document.getElementById('hammingNumber').style.display = 'none';
    document.getElementById('anagramFinder').style.display = 'none';
    document.getElementById('hypotenuseCalculator').style.display = 'none';  
}

function hammingNumber() {
    document.getElementById('hammingNumber').style.display = 'block';
    document.getElementById('name').style.display = 'none';
    document.getElementById('anagramFinder').style.display = 'none';
    document.getElementById('hypotenuseCalculator').style.display = 'none';
}

function anagramFinder() {
    document.getElementById('anagramFinder').style.display = 'block';
    document.getElementById('hypotenuseCalculator').style.display = 'none';
    document.getElementById('hammingNumber').style.display = 'none';
    document.getElementById('name').style.display = 'none';
}

function hypotenuseCalc() {
    document.getElementById('hypotenuseCalculator').style.display = 'block';
    document.getElementById('hammingNumber').style.display = 'none';
    document.getElementById('name').style.display = 'none';
    document.getElementById('anagramFinder').style.display = 'none';
}

    
function erase() {
    var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
    var displayArea = document.getElementById('displayArea');
    firstName.value = null;  
    lastName.value = null; 
    displayArea.innerHTML = null;   
}


function clearInput() {
    var number = document.getElementById('number');
    var displayNumber = document.getElementById('displayNumber');
    number.value = null;  
    displayNumber.innerHTML = null;   
}

function clear2() {
    var firstString = document.getElementById('firstString');
    var secondString = document.getElementById('secondString');
    var display3 = document.getElementById('display3');
    firstString.value = null;  
    secondString.value = null;
    display3.innerHTML = null;   
}

function clear3() {
    var leg1 = document.getElementById('leg1');
    var leg2 = document.getElementById('leg2');
    var display4 = document.getElementById('display4');
    leg1.value = null;  
    leg2.value = null;
    display4.innerHTML = null;   
}

function showButton() {
    var button = document.getElementById('simulationButton').style.display = 'block'; 
}

function simulationErase() {
    var image = document.getElementById('image').style.display = 'none';
    var button = document.getElementById('simulationButton').style.display = 'none';
}
    



