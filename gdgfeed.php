<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
echo file_get_contents("https://developers.google.com/events/feed/json?group=".$_GET['id']."&start=0&end=999999999999999999");

?>
