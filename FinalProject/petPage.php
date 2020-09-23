<?php
   $check = empty($_GET['function1']) ? 'Unknown' : $_GET['function1'];

    if(strcmp("nameFunction", $check) == 0) {
        $firstName = $_GET['firstName'];
        if($firstName == null) {
            print "Error: You must enter a name";
        }
        else if(is_string($firstName) == false) {
            print "Error: Enter strings only";
        }
        else if(1 == preg_match('/[?\&\:\/\#]/', $firstName)) {
            print "Error: Do not enter illegal characters (:, &, /, ?, #, etc.)";
        }
        else {
            print $firstName;
        }
    }
?> 