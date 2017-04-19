<?php

//============================
//	SodexoSpider v 1.0
//============================

/*
*	Tämä luokka hakee sodexo.fi sivustolla olevien ravintoloiden menu-infon ja muuttaa sen
*	objektitaulukoksi, jossa key on ravintolan nimi ja value on menun sisällön arvot assc arrayna.
*	Ottaa parametrina taulukon ravintola id numeroista.
*/

class SodexoSpider {

	public $pvm;
	public $id_arr = [];
	public $course_info = [];

	// Alustetaan myöhemmin tarvittavia muuttujia 
	public function __construct(array $ravintola_id = []) {

		$this->pvm = $this->getPvm();
		$this->id_arr = $ravintola_id;

		$this->getData();
	}

	// Hakee datan json muodossa 
	public function getData() {

		$sodexo_domain = 'http://www.sodexo.fi/';
		$path = 'ruokalistat/output/daily_json/';

		foreach ($this->id_arr as $key => $value) {

			$json_data = file_get_contents($sodexo_domain . $path . $value . '/' . $this->pvm .'/fi');

			$course_info = $this->toObjectArray($json_data);
			
			$this->id_arr[$key] = $course_info;
		}
	}

	// muuttaa jsonin php objekteiksi
	public function toObjectArray($json) {


		$obj_arr = json_decode($json);
		$course_info = $obj_arr->courses;


			if(empty($course_info)) {
				
				return;
			}

		return $course_info;


	//		echo '<pre>';
	//		  print_r($course_info);
	//		echo '</pre>';

	}

	// Palauttaa päivän ruokalistan ravintoloittain php objektitaulukkona
	public function getCourseArray() {

		return $this->id_arr;
	}

	// Palauttaa päivämäärän halutussa muodossa
	public function getPvm() {
		
		$today = date("Y/m/d");
		return $today;

	}
}

//==========
// Testejä
//==========

/*
	$id_arr = [
		"fuuga" => "5868",
		"Bittipanu" => "5865",
		"asd" => "1111"
	
		];
	
	$spider = new SodexoSpider($id_arr);
	
	echo '<pre>';
		print_r($spider->getCourseArray());
	echo '</pre>';

*/
