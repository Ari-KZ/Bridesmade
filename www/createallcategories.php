<?php
/*require the user as the parameter */
{	
	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	
	$query = "SELECT MAX(ID) FROM Wedding;";
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	$wedid = intval(mysql_result($result, 0));
	
	
	/* Now put in the new categories */
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(1,";
	$query = $query."'"."Category 1"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(2,";
	$query = $query."'"."Category 2"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(3,";
	$query = $query."'"."Category 3"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(4,";
	$query = $query."'"."Category 4"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(5,";
	$query = $query."'"."Category 5"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(6,";
	$query = $query."'"."Category 6"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(7,";
	$query = $query."'"."Category 7"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(8,";
	$query = $query."'"."Category 8"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	$query = "INSERT INTO Category(ID, Name, WeddingID) VALUES ";
	$query = $query."(9,";
	$query = $query."'"."Category 9"."',";
	$query = $query."$wedid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
		/*Also create the InspirationText entries for each category*/
		
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."1";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."2";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."3";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."4";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."5";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."6";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."7";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."8";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO InspirationText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."9";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	/*Now add PicturesText entries */
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."1";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."2";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."3";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."4";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."5";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."6";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."7";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."8";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	$query = "INSERT INTO PicturesText(WeddingID, CategoryID) VALUES ";
	$query = $query."($wedid,";
	$query = $query."9";
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