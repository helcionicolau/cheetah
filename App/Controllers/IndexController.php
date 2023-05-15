<?php

//Nome do diretório da ação
namespace App\Controllers;

//Recursos do Cheetah, MiniFramework
use MF\Controller\Action; // 'Action' é a classe padrão para qualquer controlador
use MF\Model\Container;

//Objecto do diretório Index...
class IndexController extends Action {


	public function index() {
		// $this->view->dados = array('Peixe', 'Frango', 'Arroz');
		//Recuperando View. Tendo o parámetro de 'layout' também, poderemos trocar ele a qualquer momento, sem mudar a extrutura do nosso código.

		//Este renderizador é para o layout padrão do Framework> App/Views/layout.phtml
		$this->render('index', 'layout');
	}

}



?>