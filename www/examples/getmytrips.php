<?php
  // getmytrip.php
  // Usage: Http://websys3.stern.nyu.edu/websysF14UB/websysF14UB3/getmytrip.php?TripID=x or
  //             Http://websys3.stern.nyu.edu/websysF14UB/websysF14UB3/getmytrip.php        (Returns all Trips)
  // It returns a JSON object:
  // trips
  //



  /* connect to the db */
  $link = mysql_connect('websys3.stern.nyu.edu','websysF14UB3','websysF14UB3!!') or die('Cannot connect to the DB');
  mysql_select_db('websysF14UB3',$link) or die('Cannot select the DB');


if(isset($_GET['TripID']) ) {
  $TripID = $_GET['TripID']; //  TripID was specified, so only return 1 trip
  $query = "SELECT * from Trips where TripID=".$TripID;
 }
 else
   {
   /*  return all the trips  */
   $query = "SELECT * from Trips";
   }
/* execute the query */
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);


  /*  Return the row that satisfies the TripID */

  if(mysql_num_rows($result)) {
    while($trip = mysql_fetch_assoc($result)) {
      $trips[] = array('trip'=>$trip);
    }
  }

/* output in JSON */
  {
    header('Content-type: application/json');
    echo json_encode(array('trips'=>$trips));
  }


  /* disconnect from the db */
  @mysql_close($link);




?>
