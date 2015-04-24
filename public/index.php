<?php
// from the phalcon documentation and then modified to fit the project

// SETUP
error_reporting(E_ALL);
use Phalcon\Mvc\Application;
use Phalcon\Config\Adapter\Ini as ConfigIni;

try {

	// Define config
	define('APP_PATH', realpath('..') . '/');
	$config = new ConfigIni(APP_PATH . 'app/config/config.ini');

	// load up
	require APP_PATH . 'app/config/loader.php';
	
	// load services
	require APP_PATH . 'app/config/services.php';

	// start app
	$application = new Application($di);
	echo $application->handle()->getContent();

} catch (Exception $e) {
	echo $e->getMessage();
}