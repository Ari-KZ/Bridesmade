<?php
/*require the user as the parameter */
{
	/* soak in the passed variable or set our own */
	$username = $_GET['username'];
	$email = $_GET['email'];
	$password = $_GET['password'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	
	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	$query = "SELECT MAX(ID) FROM User;";
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	$uid = mysql_result($result, 0) + 1;
	
	/* Now put in the new/replacement row */
	$query = "INSERT INTO User(ID, username, email, password, First_Name, Last_Name) VALUES ";
	$query = $query."($uid,";
	$query = $query."'"."$username"."',";
	$query = $query."'"."$email"."',";
	$query = $query."'"."$password"."',";
	$query = $query."'"."$firstname"."',";
	$query = $query."'"."$lastname"."'";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	{
		header('Content-type: application/json');
		echo json_encode($result);
	}

}

	
		/*disconnect from the db*/
		@mysql_close($link);
		
	?>