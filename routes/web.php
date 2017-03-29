<?php

use App\Models\User;
use App\Controllers\DatabaseController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->get('/show', DatabaseController::class . ':show')->setName('show');
	$app->get('/show/{course}', DatabaseController::class .':findCourse');