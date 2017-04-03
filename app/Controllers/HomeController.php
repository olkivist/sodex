<?php

namespace App\Controllers;

use PDO;

class HomeController extends BaseController {


	public function home($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses WHERE count > 1")->fetchAll(PDO::FETCH_OBJ);

		$categories = $this->c->db->query("SELECT category FROM courses")->fetchAll(PDO::FETCH_COLUMN);
		$parsedCourses = array_unique($categories);

		return $this->c->view->render($response, 'home.twig', [
			'courses' => $courses,
			'categories' => $parsedCourses
		]);	
	}
}