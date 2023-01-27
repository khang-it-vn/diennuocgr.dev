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
	require('controllers/Product.php');
	require('controllers/Servicep.php');
	require('controllers/Post.php');
	require('controllers/About.php');
	require('controllers/Manage.php');
	//import model
	require('models/HomeModel.php');
	require('models/UserModel.php');
	require('models/ProductModel.php');
	require('models/ServiceProvideModel.php');
	require('models/PostModel.php');
	require('models/AboutModel.php');
	require('models/ManageModel.php');
	
	$requestFilter = new RequestFilter($_REQUEST);
	$controller = $requestFilter -> createController();
	if($controller)
	{
		$controller -> executeAction();
	}	
?>
