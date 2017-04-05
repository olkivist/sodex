<?php

	$app = new \Slim\App([
		'settings' => [
			'displayErrorDetails' => true,
		]
	]);

	$container = $app->getContainer();	

	// connection with PDO object
	$container['db'] = function() {
		return new PDO('mysql:host=localhost;dbname=testi_database', 'user', 'password');
	};

	// Register component on container
	$container['view'] = function ($container) {
    	$view = new \Slim\Views\Twig(__DIR__ . '/../../recourses/views', [
    	
    	    'cache' => false
    	]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    	return $view;
	};


	require __DIR__ . '/../../routes/web.php';

