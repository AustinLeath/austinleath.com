<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$price = get_price($name);

	if(empty($price))
	{
		response(200,"Product Not Found",NULL);
	}
	else
	{
		response(200,"Product Found",$price);
	}

}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$message,$name,$data)
{
	header("HTTP/1.1 ".$status);

	$response['status'] = $status;
	$response['message'] = $message;
	$response['name'] = $name;
	$response['price'] = $data;

	$json_response = json_encode($response);
	echo $json_response;
}
