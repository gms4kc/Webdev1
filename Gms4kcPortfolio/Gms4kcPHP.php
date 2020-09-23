<!--
    Name: Genevieve Saab    
    Pawprint: gms4kc
    Date: 10/26/19
    Challenge PHP
--> 

<!-- html5 doctype -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Form</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="Gms4kcPHP.css">
    </head>
    <body>
        <div id="mainContainer">
            <h1 id="phpChallenge">PHP Challenge</h1>
             <p id="formSection">Form Section</p>
            
            <div id="form">
			<select id="dropdownButton" name="items" onchange="showIt(this)">
                <option selected disabled hidden>Select a Function</option>
				<option id="nameID">Name</option>
				<option id="hammingNumberID">Hamming  
				<option id="anagramFinderID">Anagram Finder</option>
				<option id="hypotenuseCalculatorID">Hypotenuse Calculator</option>
			</select>
            </div>
        
            <div id="name">
                <form method="post">
                    <input id="firstName" name="firstName" value="First Name">
                    <input id="lastName" name="lastName" value="Last Name">
                    <input type="hidden" name="function1" value="nameFunction">
                    <br><br>
                    <input type="submit" id="submit1"> 
                </form>
                <div class="buttonDiv"> 
                <button onclick="erase()">Erase</button>
                </div>
                <div ID="displayArea">
                    <?php
                       $check = $_POST['function1'];
                
                        if(strcmp("nameFunction", $check) == 0) {
                        
                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        if(($firstName == null) || ($lastName == null)) {
                            print "Sorry, but all fields are required";
                        }
                        else if((is_string($firstName) == false) || (is_string($lastName) == false)) {
                            print "Error: Enter strings only";
                        }
                        else {
                            print "Hi $firstName $lastName, welcome to my PHP challenge.";
                        }
                            
                    echo "<script>";
                    echo "document.getElementById('name').style.display = 'block';";
                    echo "</script>";
                    
                    }
                    ?>
                </div>
            </div>
            
            <div id="hammingNumber">
                <form method="get">
                    <input id="number" name="number" value="Provide a Number">
                    <input type="hidden" name="function2" value="hamNumFunction">
                    <br><br>
                    <input type="submit" id="submit2"> 
                </form>
                <div class="buttonDiv">
                <button onclick="clearInput()">Clear</button>
                </div>
                <div ID="displayNumber">
                    <?php
                        $check2 = $_GET['function2'];
                        if(strcmp("hamNumFunction", $check2) == 0) {
                            $number = $_GET['number'];
                            if($number == null){
                                print "Sorry, but all fields are required";
                            }
                            else if(is_numeric($number) == false){
                                print "Error: Enter numbers only";
                            }
                            else {
    
                                if($number == 1) {
                                    print "The provided number is hamming number!";
                                }
                                else if(($number % 2) == 0) {
                                    print "The provided number is hamming number!";
                                }
                                else if(($number % 3) == 0) {
                                    print "The provided number is hamming number!";
                                }
                                else if(($number % 5) == 0) {
                                    print "The provided number is hamming number!";
                                }
                                else {
                                    print "The provided number is NOT a hamming number!";
                                }
                            }
                            
                            echo "<script>";
                            echo "document.getElementById('hammingNumber').style.display = 'block';";
                            echo "</script>";
                        }
                    ?>
                </div>
            </div>
    
            <div id="anagramFinder">
                <form method="get">
                    <input id="firstString" name="firstString" value="Provide first word">
                    <input id="secondString" name="secondString" value="Provide second word">
                    <input type="hidden" name="function3" value="anagramFunction">
                    <br><br>
                    <input type="submit" id="submit3"> 
                </form>
                <div class="buttonDiv">
                <button onclick="clear2()">Clear</button>
                </div>
                <div id="display3">
                    <?php
                        $check3 = $_GET['function3'];
                        if(strcmp("anagramFunction", $check3) == 0) {
                            $string_1 = $_GET['firstString'];
                            $string_2 = $_GET['secondString'];
                            if(($string_1 == null) || ($string_2 == null)){
                                print "Sorry, but all fields are required";
                            }
                            else if(1 == preg_match('~[0-9]~', $string_1)) {
                                print "Error: Do not enter numbers";
                            }
                            else if(1 == preg_match('~[0-9]~', $string_2)){
                                print "Error: Do not enter numbers";
                            }
                            else if(1 == preg_match('/[?\&\:\/]/', $string_1)) {
                                print "Error: Do not enter illegal characters (:, &, /, ?, etc.)";
                            }
                            else if(1 == preg_match('/[?\&\:\/]/', $string_2)) {
                                print "Error: Do not enter illegal characters (:, &, /, ?, etc.)";
                            }
                            else {
                                 if (count_chars($string_1, 1) == count_chars($string_2, 1)) {
                                    print "The provided strings are an anagram!";
                                 }
                                else {
                                    print "The provided strings are NOT an anagram!";
                                }
                            }
                            
                            echo "<script>";
                            echo "document.getElementById('anagramFinder').style.display = 'block';";
                            echo "</script>";
                        }
                    ?>
                </div>
            </div>
            
            <div id="hypotenuseCalculator">
                <form method="get">
                    <input id="leg1" name="leg1" value="Provide first leg ">
                    <input id="leg2" name="leg2" value="Provide second leg ">
                    <input type="hidden" name="function4" value="hypotenuseFunction">
                    <br><br>
                    <input type="submit" id="submit4"> 
                </form>
                <div class="buttonDiv">
                <button onclick="clear3()">Clear</button>
                </div>
                <div id="display4">
                    <?php
                        $check4 = $_GET['function4'];
                        if(strcmp("hypotenuseFunction", $check4) == 0){
                            $leg1 = $_GET['leg1'];
                            $leg2 = $_GET['leg2'];
                            if(($leg1 == null) || ($leg2 == null)){
                                print "Sorry, but all fields are required";
                            }
                            else if((is_numeric($leg1) == false) || (is_numeric($leg1) == false) ){
                                print "Error: Enter numbers only";
                            }
                            else {
                                $leg1 = pow($leg1, 2);
                                $leg2 = pow($leg2, 2);
                                $hypotenuse = sqrt($leg1 + $leg2);
                                print "Hypotenuse of this triangle is: ";
                                echo (number_format($hypotenuse,2));
                            }
                            
                            echo "<script>";
                            echo "document.getElementById('hypotenuseCalculator').style.display = 'block';";
                            echo "</script>";
                        }
                    ?>
                </div>
            </div>
            <h3>Simulation Section</h3>
            <p>Physically type '?function=showPicture' in the URL after the .php extension to simulate a PHP request!</p>
            <button id="simulationButton" onclick="simulationErase()">Clear simulation</button>
            <?php
                $function = $_GET['function'];
                if ($function == 'showPicture') {
                    echo '<img src="php.png" alt="phpImage" id="image">';
                    echo "<script>";
                    echo "var button = document.getElementById('simulationButton').style.display = 'block'; ";
                    echo "</script>";
                    

                } 
            ?>

        </div>
        <script src="Gms4kcPHP.js"></script>
    </body>
</html>
