<?php
	class PagesController {
		public function home() {
			$name = "Dr.Lovedick";
			require_once __DIR__ . '/../views/home_content.php';
		}
		
		public function error() {
			require_once __DIR__ . '/../views/error.php';
		}
	}
?>