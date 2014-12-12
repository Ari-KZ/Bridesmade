<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!');
// Selecting Database
$db = mysql_select_db("websysF14GB3", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from User where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: home.html'); // Redirecting To Home Page
}
?>