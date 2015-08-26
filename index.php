<?php 
	error_reporting(-1);
	ini_set('display_errors', 'On');
	
	require_once('connection.php');
	
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		//if passing in controller and action
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	} else {
		//else call default home page
		$controller = 'pages';
		$action = 'home';
	}

	require_once('views/home.php');
	
	//using this tutorial to get the ball rolling http://requiremind.com/a-most-simple-php-mvc-beginners-tutorial/
?>