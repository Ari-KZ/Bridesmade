<?php
{
	/* soak in the passed variable or set our own */
	$wedid = intval($_GET['wedid']);
	$catid = intval($_GET['catid']);
	
	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	
	/* Now put in the new/replacement row */
	$query = "SELECT * FROM Task WHERE WeddingID=$wedid AND CategoryID=$catid;";
	
	$result = mysql_query($query, $link) or die('Errant query: '.$query);
	
	if ($result) {
   		while($task = mysql_fetch_assoc($result)) {
     		 $tasks[] = array('task'=>$task);
        }
    }

  /* output in necessary format */
 {
    header('Content-type: application/json');
    if ($result){ 
   		echo json_encode(array('tasks'=>$tasks));
    }
    else{
    	echo "nothing";
    }
 }

}

	
		/*disconnect from the db*/
		@mysql_close($link);
		
?>