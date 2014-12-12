<?php
$userFolder = $_POST['folderName'];
if(isset($_POST['folderName'])){
	mkdir('/var/www/html/websysF14GB/websysF14GB3/images/'.$userFolder,0777);
}
?>