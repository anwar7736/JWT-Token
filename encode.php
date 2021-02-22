<?php 
	use \Firebase\JWT\JWT;
	require_once 'vendor\autoload.php';


	$key = 12345;

	$payload = array (
			"name" => "Md. Anwar Hossain",
			"age"  => 25,
			"gender" => "Male",
			"city" => "Dhaka"
		);

	$encode = JWT::encode($payload, $key, 'HS256');
	echo $encode;

?>