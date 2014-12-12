<?php

	/* Receive the wedding name and username */
	$wedname = $_GET['wedname'];
 	$uname = $_GET['uname']; 



/* connect to the db */
  $link = mysql_connect('websys3.stern.nyu.edu','websysF14GB3','websysF14GB3!!') or die('Cannot connect to the DB');
  mysql_select_db('websysF14GB3',$link) or die('Cannot select the DB');

/* get user info */

 $query = "SELECT * FROM Wedding WHERE Name='$wedname' AND Username='$uname';";


  $result = mysql_query($query,$link) or die('Errant query:  '.$query);

  /* create one master array of the records */
  /*  it should create an array called 'user' that has one or more rows depending on whether the uid was specified */

	$rows = mysql_num_rows($result);
	
	if ($rows == 1) {
    	while($user = mysql_fetch_assoc($result)) {
     		 $users[] = array('user'=>$user);
        }
    }

  /* output in necessary format */
 {
    if ($rows == 1){ 
   		echo json_encode(array('users'=>$users));
    }
    else{
    	echo 1;
    }
 }

  /* disconnect from the db */
  @mysql_close($link);

?>