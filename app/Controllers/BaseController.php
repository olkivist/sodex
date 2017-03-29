<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

	abstract class BaseController {
	
		protected $c;

		public function __construct(ContainerInterface $c) {

			$this->c = $c;
		}

		protected function render404($response) {

			return $this->c->view->render($response->withStatus(404), 'error-views/404.twig');
		}
	}