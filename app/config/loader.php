<?php
$loader = new \Phalcon\Loader();

// Register Directories
$loader->registerDirs(
	array(
		APP_PATH . $config->application->controllersDir,
		APP_PATH . $config->application->modelsDir
	)
)->register();
