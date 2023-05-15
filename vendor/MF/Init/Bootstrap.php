<?php

 //Objecto de Inicialização da aplicação
namespace MF\Init;

// Esta classe será usada apenas para herdar métodos, não para ser instanciada, sendo ele código de inicialização do framework
abstract class Bootstrap {

	private $routes;

	abstract protected function initRoutes();

    //Extrutura a ser executada quando for chamada essa classe...
	public function __construct() {
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	//Tornando ele acessivel. E fazendo a leitura...
	public function getRoutes() {
		return $this->routes;
	}

    // Função que vai definir as rotas
	public function setRoutes(array $routes) {
        $this->routes = $routes;
	}

	// Se o fluxo for processado, nós vamos dinamicamente criar uma classe com base no atributo controller da variável 'route'
	protected function run($url) {

        foreach ($this->getRoutes() as $key => $route) {
        	
        	if($url == $route['route']){
        
                $class = "App\\Controllers\\".ucfirst($route['controller']); // A primeira letra será maiúscula.

                $controller = new $class;
                
                $action = $route['action'];

                $controller->$action();

                
        	}
        }

}

    //Função que vai retornar a url corrente do usuário
	protected function getUrl() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // vai retornar para nós todos os detalhes do servidor da nossa aplicação.
	}



}


?>