<?php 
	use \Firebase\JWT\JWT;
	require_once 'vendor\autoload.php';

	$key = 12345;

	$payload = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiTWQuIEFud2FyIEhvc3NhaW4iLCJhZ2UiOjI1LCJnZW5kZXIiOiJNYWxlIiwiY2l0eSI6IkRoYWthIn0.kpNqNE8qZNoIs8i-6uuu4e1iUCLUBjFHPbJcP8oH3hE";

	$decode = JWT::decode($payload, $key, array('HS256'));

	print_r($decode);




?>


