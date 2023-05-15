<?php

namespace MF\Controller;

abstract class Action
{

	//Atributo do escopo do objecto
	protected $view;

	//Esses métodos do controller, representam as "Actions" da arquitetura MVC

	// Este 'construct' irá pertencer à qualquer controlador na nossa aplicação
	public function __construct()
	{
		$this->view = new \stdClass(); // Apartir dela será possível criar classes padrões
	}

	//Esse método será responsável por renderizar o layout
	protected function render($view, $layout)
	{
		$this->view->page = $view;

		//Antes mesmo de usar o layout, será melhor criar condição que verifica se o arquivo existe(No caso, o 'layout.phtml').
		if (file_exists("../App/Views/" . $layout . ".phtml")) {
			require_once "../App/Views/" . $layout . ".phtml";
		} else {
			// $this->content();
			echo "Erro: 404. Este arquivo não existe: <h1><b>". $layout. "</b></h1>";
		}
	}

	//Encapsulando os métodos, de modo a serem chamados quando necessários. No resumo será o método que renderiza uma determinada 'View'
	protected function content()
	{

		//Será utilizado para chamar uma class, e retornar o nome da classe que está a ser usada no momento.
		$classAtual = get_class($this);

		// Será utilizado para remover o caminho principal, e focar apenas no controller a ser utilizado no momento.
		$classAtual = str_replace('App\\Controllers\\', '', $classAtual);

		//Agora, vamos eliminar o 'Controller' do caminho, deixando o referencial do controller apenas. Veja à seguir...
		$classAtual = strtolower(str_replace('Controller', '', $classAtual));

		if(file_exists("../App/Views/" . $classAtual . "/" . $this->view->page . ".phtml")) {
			require_once "../App/Views/" . $classAtual . "/" . $this->view->page . ".phtml";
		} else {
			echo "Erro: 404. Este arquivo não existe: <h1><b>". $this->view->page. "</b></h1>";
		}
		
	}
}