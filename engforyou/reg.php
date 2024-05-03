<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});


if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
&& !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	
	$requestData = $_POST;

	$response = array();

	$PDO = PdoConnect::getInstance();

	$inputEmail = $requestData['regFormEmail'];

	$resultUsers = $PDO->PDO->query("
    	SELECT email FROM users WHERE email = '$inputEmail'
	");
	$selectUsers = $resultUsers -> fetch();

	if (!$selectUsers){

		$sqlInsert = "INSERT INTO users SET email = :regFormEmail, pass = :regFormPassword";
		$set = $PDO->PDO->prepare($sqlInsert);
		$response['values'] = $set->execute($requestData);

		setcookie('email', $requestData['regFormEmail']);
		setcookie('pass', $requestData['regFormPassword']);
		
		$response['res'] = true;

	} else {
		$response['res'] = false;
	}

	echo json_encode($response);
}