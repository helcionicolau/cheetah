<?php

namespace App; // Usado para apelidar o nome do diretório, que no caso é mesmo 'App'

//Importing the methods relating the 'Cheetah Framework'
use MF\Init\Bootstrap;

// A classe que vai carregar todas as URL's
class Route extends Bootstrap {

	
	// Aqui serão definidas as rotas que a nossa aplicação possue.
	protected function initRoutes() {
		
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$this->setRoutes($routes);
	}

}

?>