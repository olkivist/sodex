<?php

<<<<<<< HEAD
use App\Models\User;
use App\Controllers\CourseController;
=======
use App\Controllers\DatabaseController;
>>>>>>> 3f390fa23584b2e9647b4796d5007685551ddb2e
use App\Controllers\CategoryController;


	$app->get('/', function($request, $response) {

		return $this->view->render($response, 'home.twig');
	})->setName('home');

	$app->get('/courses', CourseController::class . ':courses')->setName('courses');
	$app->get('/courses/{course}', CourseController::class .':show')->setName('details.show');

	$app->get('/categories', CategoryController::class .':categories')->setName('categories');
	$app->get('/categories/{category}', CategoryController::class .':show')->setName('courses.show');
