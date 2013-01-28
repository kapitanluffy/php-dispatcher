<?php

include 'url_driver.php';

define('BASEURL', $baseurl);
define('MY_APP', $my_app);

FEC_URL_DRIVER::$controller = $default_controller;
FEC_URL_DRIVER::$action = $default_action;

abstract class Dispatcher extends FEC_URL_Driver {

	static public function start(){

		if(!empty(self::$baseurl)) die('An instance of a Request has already started!');
		
		defined('BASEURL') ? self::$baseurl = BASEURL : die('BASEURL not defined') ;

		$resource_uri = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

		$parsed_uri = parse_url($resource_uri);
		$parsed_uri = $parsed_uri['path'];

		$baseurl = preg_replace("#http(?:s|)://#", '', self::$baseurl);

		$parsed_uri = preg_replace("#{$baseurl}(?:\/|)#", '', $parsed_uri);

		$parsed_uri = preg_replace("#index.php(?:\/|)#", '', $parsed_uri);

		$parsed_uri = trim($parsed_uri, '/');

		if(! empty($parsed_uri)) self::$query = explode('/', $parsed_uri);

		if(file_exists(MY_APP . '/' . @self::$query[0] . '.php')){
			self::$controller = array_shift(self::$query);
		}

		include MY_APP . '/' . strtolower(self::$controller) . '.php';

		if(method_exists(self::$controller, @self::$query[0])){
			self::$action = array_shift(self::$query);
		}

		if(! method_exists(self::$controller, self::$action)){
			die("<b>". ucfirst(self::$controller) ."</b> class has no <b>". self::$action ."()</b> method");
		}


		call_user_func_array(array(new self::$controller, self::$action), self::$query);
	}
}

?>