<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');

$finputData = file_get_contents("php://input");
$user = json_decode($finputData);

$filename = strtolower(str_replace(' ','',$user->name)).'.json';
$handle = fopen("users/".$filename, 'w') or die('Cannot open file: '.$filename);
fwrite($handle, $finputData);
fclose($handle);
?>
