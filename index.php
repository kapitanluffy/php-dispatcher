<?php

define('BASEDIR', dirname(__FILE__));

include BASEDIR . '/dispatcher/config.php';
include BASEDIR . '/dispatcher/dispatcher.php';

Dispatcher::start();

?>