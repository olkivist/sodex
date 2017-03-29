<?php

namespace App\Controllers;
use PDO;

class DatabaseController extends BaseController {


	public function show($request, $response){

		$courses = $this->c->db->query("SELECT * FROM courses")->fetchAll(PDO::FETCH_OBJ);

		var_dump($courses);

	}

}