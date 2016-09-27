<?php

class Model {
	static protected $db;
	function __construct() {
		try {
			self::$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
			if(!self::$db) 
				throw new Exception("MySQL connect error");
		} catch(Exception $e) {
			echo $e->getMessage();
		}
	}
	function __destruct() {
		self::$db=null;
	}	
}