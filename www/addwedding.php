<?php
/*require the user as the parameter */
{
	/* soak in the passed variable or set our own */
	$wedname = $_GET['wedname'];
	$uname = $_GET['uname'];
	
	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	$query = "SELECT MAX(ID) FROM Wedding;";
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	$wedid = mysql_result($result, 0) + 1;
	
	/* Now put in the new/replacement row */
	$query = "INSERT INTO Wedding (ID, Username, Name) VALUES ";
	$query = $query."($wedid,";
	$query = $query."'"."$uname"."',";
	$query = $query."'"."$wedname"."'";
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