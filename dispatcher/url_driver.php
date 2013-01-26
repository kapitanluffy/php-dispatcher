<?php

abstract class FEC_URL_Driver {

	static public $baseurl;
	static public $query = array();
	static public $controller;
	static public $action;
}

function query($index){
	return !empty(URL_Driver::$query[$index]) ? URL_Driver::$query[$index] :'';
}

?>