<?php
if(isset($_GET['username']) ) {


  $username= $_GET['username']; //no default
  $password =$_GET['password'];





  /* connect to the db */
  $link = mysql_connect('websys3.stern.nyu.edu','websysF14GB3','websysF14GB3!!') or die('Cannot connect to the DB');
  mysql_select_db('websysF14GB3',$link) or die('Cannot select the DB');




  $query = "SELECT * FROM User WHERE Username="."'".$username."'"." AND Password="."'".$password."'";

/* execute the query */
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);


  /*  Return the row that satisfies the login */

  if(mysql_num_rows($result)) {
    while($user = mysql_fetch_assoc($result)) {
      $users[] = array('user'=>$user);
    }
  }

  /* output in necessary format */
  {
    header('Content-type: application/json');
    echo json_encode(array('users'=>$users));
  }


  /* disconnect from the db */
  @mysql_close($link);
 }
ELSE 
echo "no input to processlogin";


?>
