<?php
/*require the user as the parameter */
{
	session_start(); // Starting Session
	
	/* soak in the passed variable or set our own */
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	
	/* Check if user and password correct */
	/*$query = "SELECT * FROM User WHERE Username = '"."$username"."' AND Password = '"."$password"."';";*/
	$query = "SELECT * FROM User WHERE Username='$username' AND Password='$password';";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$rows = mysql_num_rows($result);
	
	if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: getuserinfo.php"); // Redirecting To Other Page
		
		
	} else {
		$error = "Username or Password is invalid";
	}
}

	
		/*disconnect from the db*/
		@mysql_close($link);
		
	?>