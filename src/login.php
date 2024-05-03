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

	$inputEmail = $requestData['loginFormEmail'];
    $inputPassword = $requestData['loginFormPassword'];

	$resultUsers = $PDO->PDO->query("
    	SELECT * FROM users WHERE email = '$inputEmail'
	");
	$selectUsers = $resultUsers -> fetch();

	if (($selectUsers['email'] == $inputEmail) && (($selectUsers['pass'] == $inputPassword))){

		setcookie('email', $selectUsers['email']);
		setcookie('pass', $selectUsers['pass']);
		
		$response['res'] = true;

	} else {
		$response['res'] = false;
	}

	echo json_encode($response);
}