<?php
$weddingid = $_GET['weddingid'];
setcookie ( "currentwedding", $weddingid, time()+60 );
?>