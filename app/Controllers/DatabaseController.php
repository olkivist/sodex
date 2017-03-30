<?php

namespace App\Controllers;



use PDO;
use App\Models\Course;


class DatabaseController extends BaseController {

	public function showCourses($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses WHERE id < 20")->fetchAll(PDO::FETCH_OBJ);

		return $this->c->view->render($response, 'courses/top-courses.twig', [
			'courses' => $courses
		]);

	}

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
}