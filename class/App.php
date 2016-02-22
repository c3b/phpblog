<?php
require_once 'autoload.php';

class App{

	private static $bd;

	function makeBdd(){
		if (self::$bd === null){
			self::$bd = new Database();
		}
		
		return self::$bd->getBdd();
	}
}