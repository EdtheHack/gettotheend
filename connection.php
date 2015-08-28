<?php
	class Database {
		private static $db_conn = NULL;
		
		public static function init(){
			if (!isset(self::$db_conn)){
				self::$db_conn = new mysqli('192.168.0.13', 'ed', 'Evo3runn', 'gettotheend');
			}
		}
		
		public function getConnection(){
			if (isset(self::$db_conn)){
				return self::$db_conn;
			} else {
				return null;
			}
		}
	}
?>