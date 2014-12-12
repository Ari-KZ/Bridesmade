<?php
$uname = $_POST['uname'];
$wedid = intval($_POST['wedid']);
$catid = intval($_POST['catid']);
$name = $_FILES['pic']['name'];

if(isset($_FILES["pic"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["pic"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["pic"]["type"] == "image/png") || ($_FILES["pic"]["type"] == "image/jpg") || ($_FILES["pic"]["type"] == "image/jpeg")
) && ($_FILES["pic"]["size"] < 10000000)//Approx. 10 Mb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["pic"]["error"] > 0)
{
echo "Return Code: " . $_FILES["pic"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("/var/www/html/websysF14GB/websysF14GB3/images/$uname/" . $_FILES["pic"]["name"])) {
echo $_FILES["pic"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{

$sourcePath = $_FILES["pic"]['tmp_name']; // Storing source path of the file in a variable
$targetPath = "/var/www/html/websysF14GB/websysF14GB3/images/$uname/".$_FILES['pic']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}

/* Now modify database with new inspiration picture */

	/* connect to the db */
	$link = mysql_connect('websys3.stern.nyu.edu', 'websysF14GB3', 'websysF14GB3!!') or die('Cannot connect to the DB');
	mysql_select_db('websysF14GB3', $link) or die('Cannot select the DB');
	
	/* Now put in the new/replacement row */
	$query = "INSERT INTO Picture(Name, WeddingID, CategoryID) VALUES ";
	$query = $query."('"."$name"."',";
	$query = $query."$wedid,";
	$query = $query."$catid";
	$query = $query.");";
	
	$result = mysql_query($query,$link) or die('Errant query: '.$query);
	
	echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
	echo $result;

?>