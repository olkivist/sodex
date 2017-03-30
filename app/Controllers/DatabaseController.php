<?php

namespace App\Controllers;



use PDO;
use App\Models\Course;


class DatabaseController extends BaseController {


	public function showCourses($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses WHERE id < 10")->fetchAll(PDO::FETCH_OBJ);

//		echo '<pre>';
//			var_dump($courses);
//		echo '</pre>';

		return $this->c->view->render($response, 'courses/top-courses.twig', [
			'courses' => $courses
		]);

	}

	// Anna osoiteriville parametrina ruokalaji 
	public function findCourse($request, $response, $args) {

		$course = $this->c->db->prepare("SELECT * FROM courses WHERE course_name = :course");

		$course->execute([

			'course' => $args['course']
		]);

		$course = $course->fetch(PDO::FETCH_OBJ);

 		return $this->c->view->render($response, 'courses/course-info.twig', [
 			'course' => $course
 		]);
	}

	public function showCategories($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses WHERE id < 10")->fetchAll(PDO::FETCH_CLASS, Course::class);

		return $this->c->view->render($response, 'categories/categories.twig', [
			'courses' => $courses
		]);

	}


}