<?php require_once('Connections/register_login.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO Users (Password) VALUES (%s)",
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_register_login, $register_login);
  $Result1 = mysql_query($insertSQL, $register_login) or die(mysql_error());
}

mysql_select_db($database_register_login, $register_login);
$query_Recordset1 = "SELECT * FROM Activities";
$Recordset1 = mysql_query($query_Recordset1, $register_login) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php require_once('Connections/register_login.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_register_login, $register_login);
$query_Recordset1 = "SELECT * FROM Users";
$Recordset1 = mysql_query($query_Recordset1, $register_login) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['password'])) {
  $loginUsername=$_POST['password'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_register_login, $register_login);
  
  $LoginRS__query=sprintf("SELECT UserID, Password FROM Users WHERE UserID=%s AND Password=%s",
    GetSQLValueString($loginUsername, "int"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $register_login) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Travel App</title>
<link rel="stylesheet" type="text/css" href="jquery-mobile/style1.css">
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Fernweh</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview" class="mainmenu">
			<li><a href="#page2">Login</a></li>
            <li><a href="#page3">Register</a></li>
			
		</ul>		
	</div>
	
</div>

<div data-role="page" id="page2">
	<div data-role="header">
		<h1>Fernweh</h1>
	</div>
	<div data-role="content">	
                 <form ACTION- processlogin.php>
Email:<input type="email" required name="email">
Password:<form method="POST" action="<?php echo $loginFormAction; ?>" name="form"><input type="password" required name ="password">
        <input type="submit" value="Login">
        <input type="hidden" name="MM_insert" value="form">
         </form>
	</div>
	
</div>

<div data-role="page" id="page3">
	<div data-role="header">
		<h1>Fernweh</h1>
	</div>
<div data-role="content">	
    	First Name: <input type="text" required>
        Last Name:<input type="text" required>
		Email: <form><input type="email" required></form>
        Password:<form><input type="password" required></form>	
        <input type="submit" value="Register">	
	
</div>


</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
