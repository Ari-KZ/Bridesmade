<?php

$wedid = intval($_POST['wedid']);
$catid = intval($_POST['catid']);
$name = $_POST['name'];
$budget = intval($_POST['budget']);


$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');



	/* Set Text to new */
	$query = "INSERT INTO Task (Name, WeddingID, CategoryID, Budget, Completed) VALUES ";
	$query = $query."('"."$name"."',";
	$query = $query."$wedid,";
	$query = $query."$catid,";
	$query = $query."$budget,";
	$query = $query."'No'";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	{
		header('Content-type: application/json');
		echo json_encode($result);
	}
	
	/*disconnect from the db*/
	@mysql_close($link);

?>