<?php

abstract class FEC_URL_Driver {

	static public $baseurl;
	static public $query = array();
	static public $controller;
	static public $action;

	function queries(){
		return self::$query;
	}

	function query($index){
		return !empty(self::$query[$index]) ? self::$query[$index] :'';
	}

	function anchor($url, $base = true){
		if($base) $url = self::$baseurl . '/' . $url;
		return $url;
	}

	function redirect($url, $base = true){
		if($base) $url = self::$baseurl . '/' . $url;
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: ' . $url);
	}
}

?>
