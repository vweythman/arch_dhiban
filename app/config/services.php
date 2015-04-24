<?php

use Phalcon\Mvc\View;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Assets\Manager as AssetsManager;

// starting the factory
$di = new FactoryDefault();

// seting up the event manager
$di->set('dispatcher', function() use ($di) {
	$eventsManager = new EventsManager;

	$dispatcher = new Dispatcher;
	$dispatcher->setEventsManager($eventsManager);
	return $dispatcher;
});

// setting up the assets manager
$di->set('assets', function() {
     $assets = new AssetsManagerr();
      return $assets;
});

// setting the base url based upon the url in the config file
$di->set('url', function() use ($config){
	$url = new UrlProvider();
	$url->setBaseUri($config->application->baseUri);
	return $url;
});

// setting the view and the view directory
$di->set('view', function() use ($config) {
	$view = new View();
	$view->setViewsDir(APP_PATH . $config->application->viewsDir);
	return $view;
});

/* setting up the current db
*  REMINDER: this one is for dhiban presently
*  we will be adding more databases eventually
*/
$di->set('db', function() use ($config) {
	$dbclass = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
	return new $dbclass(array(
		"host"     => $config->database->host,
		"username" => $config->database->username,
		"password" => $config->database->password,
		"dbname"   => $config->database->name
	));
});
