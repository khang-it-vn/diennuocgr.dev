<?php

	session_start();

	require('config.php');

	//
	require('Base/RequestFilter.php');
	require('Base/Controller.php');
	require('Base/DbContext.php');
	// import controller
	require('controllers/Home.php');
	require('controllers/User.php');

	//import model
	require('models/HomeModel.php');
	require('models/UserModel.php');


	$requestFilter = new RequestFilter($_REQUEST);
	$controller = $requestFilter -> createController();
	if($controller)
	{
		$controller -> executeAction();
	}	
?>
