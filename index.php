<?php

define('BASEDIR', dirname(__FILE__));

include BASEDIR . '/dispatcher/config.php';
include BASEDIR . '/dispatcher/url_driver.php';

define('BASEURL', $baseurl);
define('MY_APP', $my_app);

FEC_URL_DRIVER::$controller = $default_controller;
FEC_URL_DRIVER::$action = $default_action;

include BASEDIR . '/dispatcher/dispatcher.php';
Dispatcher::start();

?>