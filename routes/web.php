<?php


use App\Models\User;
use App\Controllers\CourseController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;


	$app->get('/', HomeController::class . ':home')->setName('home');

	$app->get('/courses', CourseController::class . ':topcourses')->setName('courses');
	$app->get('/courses/{course}', CourseController::class .':show')->setName('details.show');

	$app->get('/categories', CategoryController::class .':categories')->setName('categories');
	$app->get('/categories/{category}', CategoryController::class .':show')->setName('courses.show');

