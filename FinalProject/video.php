<?php
    	// Every time we want to access $_SESSION, we have to call session_start()
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>

<!-- html5 doctype -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cute Video!</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="petPage.css">
        <!--    1. jQuery UI CSS-->
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.css">
    
        <!--    2. jQuery Core Library-->
        <script src="jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    
        <!--    3. jQuery UI JavaScript -->
        <script src="jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    </head>
    <body>
        <div id="nav"></div>
        
        <br><br>
        
        <object data="https://www.youtube.com/embed/lAIGb1lfpBw"
           width="560" height="315"></object>
        <p id="goBackLink"><a href="petSim.php">Go back to pet simulator!</a></p>
        <script src="petPage.js"></script>
    </body>
</html>