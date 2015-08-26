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
?>