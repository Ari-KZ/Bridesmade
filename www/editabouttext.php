<?php

$wedid = intval($_POST['wedid']);
$catid = intval($_POST['catid']);
$text = $_POST['text'];


$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');



	/* Set Text to new */
	$query = "UPDATE PicturesText SET Text='$text' WHERE WeddingID=$wedid AND CategoryID=$catid";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	{
		header('Content-type: application/json');
		echo json_encode($result);
	}
	
	/*disconnect from the db*/
	@mysql_close($link);

?>