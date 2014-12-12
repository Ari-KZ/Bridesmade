<?php
/*require the user as the parameter */
{
	/* soak in the passed variable or set our own */
	$wedid = intval($_POST['wedid']);
	$catid = intval($_POST['catid']);
	
	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	
	/* Now put in the new/replacement row */
	$query = "SELECT Text FROM InspirationText WHERE WeddingID=$wedid AND CategoryID=$catid;";
	
	$result = mysql_query($query, $link) or die('Errant query: '.$query);
	
	$rows = mysql_num_rows($result);
	
	if($rows == 1){
		$text = mysql_result($result, 0);
		echo $text;
	}
	else{
		echo false;
		
	}

}

	
		/*disconnect from the db*/
		@mysql_close($link);
		
?>