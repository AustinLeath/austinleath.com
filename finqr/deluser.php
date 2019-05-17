<?php
header('Access-Control-Allow-Origin');

$finputData = file_get_contents("php://input");

$filename = strtolower(str_replace(' ','',$finputData)).'.json';

if(file_exists('users/'.$filename)){
    unlink('users/'.$filename);
}
?>
