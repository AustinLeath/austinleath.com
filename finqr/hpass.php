<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');

$jsonString = file_get_contents("php://input");
/*
$phpObject = json_decode($jsonString);
$newJsonString = json_encode($phpObject);
header('Content-Type: application/json');
echo $newJsonString;
*/
$my_file = 'file.json';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = $jsonString;
fwrite($handle, $data);
fclose($handle);

?>
