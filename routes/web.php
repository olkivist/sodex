<?php

use App\Models\User;
use App\Controllers\DatabaseController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->get('/courses', DatabaseController::class . ':showCourses');
	$app->get('/courses/{course}', DatabaseController::class .':findCourse');
	$app->get('/categories', DatabaseController::class .':showCategories');
