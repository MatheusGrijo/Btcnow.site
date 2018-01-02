<?php
header('Access-Control-Allow-Origin: *');
$aux = $_GET["url"];

echo file_get_contents($aux);

?>