<?php

use App\Models\User;
use App\Controllers\DatabaseController;
use App\Controllers\CategoryController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->get('/courses', DatabaseController::class . ':showCourses');
	$app->get('/courses/{course}', DatabaseController::class .':findCourse');

	$app->get('/categories', CategoryController::class .':categories');
	$app->get('/categories/{category}', CategoryController::class .':show')->setName('courses.show');
