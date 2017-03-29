<?php
	$domain = 'http://www.sodexo.fi/';
	$path = 'ruokalistat/output/daily_json/';
	static $total;
	
	$url_arr = array(
		'Fuuga' => $domain . $path . '5868/'. pvm() . '/fi',
		'Dynamo' => $domain . $path . '5865/'. pvm() . '/fi',
		'Rajacafe' => $domain . $path . '5861/'. pvm() . '/fi',
		'Radis' => $domain . $path . '5859/'. pvm() . '/fi'
		);
	// käy läpi taulukon ($url_arr) eri ravintolat ja niiden menut
	foreach ($url_arr as $key => $value) {
		
		// parsitaan valuesta taulukko ruokalajiobjekteja
		$json = file_get_contents($value);
		$obj = json_decode($json);
		$arr = $obj->courses;
		foreach ($arr as $key => $value) {
			if(isset($value->title_fi)) $course_title = $value->title_fi;
			if(isset($value->category)) $course_category = $value->category;
			//require_once('compare_courses.php');
			
			require_once('courses.php');
			$new_course = new Course($course_title, $course_category);
			
			$total = Course::$total_id;
			echo '<br />';
		}
	}
	function pvm() {
		
		$today = date("Y/m/d");
	//	return $today;
		return '2017/02/24';
	//	return '2017/02/23';
	//	return '2017/02/22';
	}