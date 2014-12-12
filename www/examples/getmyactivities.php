<?php
  // getmyactivities.php
  // Usage: Http://websys3.stern.nyu.edu/websysF14UB/websysF14UB3/getmyactivities.php?ActivityID=x or
  //             Http://websys3.stern.nyu.edu/websysF14UB/websysF14UB3/getmyactivities.php        (Returns all Activities)
  // It returns a JSON object:
  // activitys
  //
  // Note: Also need to return activities for a trip at some point
  //


  /* connect to the db */
  $link = mysql_connect('websys3.stern.nyu.edu','websysF14UB3','websysF14UB3!!') or die('Cannot connect to the DB');
  mysql_select_db('websysF14UB3',$link) or die('Cannot select the DB');


if(isset($_GET['ActivityID']) ) {  // get only one activity
  $ActivityID = $_GET['ActivityID']; //  ActivityID was specified, so only return 1 activity
  $query = "SELECT * from Activities where ActivityID=" + $ActivityID;
 }
 else
   {
   /*  return all the activities  */
   $query = "SELECT * from Activities";
   }

/* execute the query */
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);


  /*  Return the row that satisfies the ActivityID */

  if(mysql_num_rows($result)) {
    while($activity = mysql_fetch_assoc($result)) {
      $activities[] = array('activity'=>$activity);
    }
  }

/* output in JSON */
  {
    header('Content-type: application/json');
    echo json_encode(array('activities'=>$activities));
  }


  /* disconnect from the db */
  @mysql_close($link);




?>
