<?php
header('Content-Type:text/html');

$data = file_get_contents('list.json');
$servers = array_values(json_decode($data));

$names = array();
foreach ($servers as $name) {
    echo "
    '$name' => array(
        'ip' => '$name',
        'port' => 80,
        'port_description' => 'Port 80'
    ),";
    echo "<br>";
}





 ?>
