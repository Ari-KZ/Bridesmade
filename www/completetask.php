<?php

$wedid = intval($_POST['wedid']);
$catid = intval($_POST['catid']);
$name = $_POST['name'];


$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');



	/* Set Completed to Yes */
	$query = "UPDATE Task SET Completed='Yes' WHERE WeddingID=$wedid AND CategoryID=$catid AND Name='$name';";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	{
		header('Content-type: application/json');
		echo json_encode($result);
	}
	
	/*disconnect from the db*/
	@mysql_close($link);

?>