<?php
	function call($controller, $action) {
		// require controller specified
		require_once('controllers/' . $controller . '.php');
		
		// get an instance of required controller
		switch($controller){
			case 'pages':
				$controller = new PagesController();
			break;
		}
		
		// do action
		$controller->{ $action }();
	}
	
	$controllers = array('pages' => ['home', 'error'],
						 'standard_game' => ['play', 'extend', 'addScore'] );
	
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else 
			call('pages', 'error')
		{
	}
?>