<?php

namespace App\Controllers;


use PDO;
use App\Models\Course;


class CourseController extends BaseController {


	public function topcourses($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses")->fetchAll(PDO::FETCH_OBJ);

		return $this->c->view->render($response, 'courses/top-courses.twig', [
			'courses' => $courses
		]);
	}

	public function show($request, $response, $args) {

		$course = $this->c->db->prepare("SELECT * FROM courses WHERE course_name = :course");

		$course->execute([

			'course' => $args['course']
		]);

		$course = $course->fetch(PDO::FETCH_OBJ);

		if ($course === false) {
			return $this->render404($response);
		}

 		return $this->c->view->render($response, 'courses/course-info.twig', [
 			'course' => $course
 		]);
	
	}


}