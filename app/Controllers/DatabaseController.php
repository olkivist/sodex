<?php

namespace App\Controllers;
use PDO;

class DatabaseController extends BaseController {


	public function show($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses")->fetchAll(PDO::FETCH_OBJ);

		var_dump($courses);

	}

	// Anna osoiteriville parametrina ruokalaji 
	public function findCourse($request, $response, $args) {

		$course = $this->c->db->prepare("SELECT * FROM courses WHERE course_name = :course");

		$course->execute([

			'course' => $args['course']
		]);

		$course = $course->fetch(PDO::FETCH_OBJ);

		var_dump($course);


		// tee oma view courseille
//		return $this->view->render($response, 'courses/course.twig', [
//			'course' => $course_name
//		]);
	}

}