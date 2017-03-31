<?php

namespace App\Controllers;


use PDO;
use App\Models\Category;


class CategoryController extends BaseController {


	public function categories($request, $response){
	
			$courses = $this->c->db->query("SELECT category FROM courses")->fetchAll(PDO::FETCH_COLUMN);

			$parsedCourses = array_unique($courses);

			return $this->c->view->render($response, 'categories/categories.twig', [
				'categories' => $parsedCourses
			]);

	}

	public function show($request, $response, $args){

			$category = $this->c->db->prepare("SELECT course_name FROM courses WHERE category = :category");
			$category->execute(['category' => $args['category']]);
			$category = $category->fetchAll(PDO::FETCH_COLUMN);
	
			$parsedCourses = array_unique($category);
			
			 return $this->c->view->render($response, 'categories/category.twig', [
			 	'courses' => $parsedCourses,
			 	'category' => $args['category']
			 ]);
	
	}
}