<?php

use App\Models\User;
use App\Controllers\CourseController;
use App\Controllers\CategoryController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	});

	$app->get('/courses', CourseController::class . ':courses');
	$app->get('/courses/{course}', CourseController::class .':show')->setName('details.show');

	$app->get('/categories', CategoryController::class .':categories');
	$app->get('/categories/{category}', CategoryController::class .':show')->setName('courses.show');
