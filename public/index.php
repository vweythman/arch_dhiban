<?php
// from the phalcon documentation and then modified to fit the project

// SETUP
use Phalcon\Mvc\Application;
use Phalcon\Config\Adapter\Ini as ConfigIni;

include '../app/library/helper.php';


try {

	// Define config
	define('APP_PATH', realpath('..') . '/');
	$config = new ConfigIni(APP_PATH . 'app/config/config.ini');

	// load up
	$loader = new \Phalcon\Loader();

	// register directories
	$loader->registerDirs(
		array(
			APP_PATH . $config->application->controllersDir,
			APP_PATH . $config->application->modelsDir,
			APP_PATH . $config->application->libraryDir
		)
	)->register();
	
	// load services
	require APP_PATH . 'app/config/services.php';

	// start app
	$application = new Application($di);
	echo $application->handle()->getContent();

} catch (Exception $e) {
	echo $e->getMessage();
}
