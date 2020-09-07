<?php

namespace MF\Init;

abstract class Bootstrap {

  private $routes; // é setada pela initRoutes()

  // pelo contrutor da classe, 
  public function __construct() {
    // inicia as rotas configuradas
    $this->initRoutes();
    // logo em seguinda, run() é executada e recebe a rota 
    // acessada no navegador, através index.php
    $this->run($this->getUrl());
  }

  abstract protected function initRoutes();

  public function getRoutes() {
    return $this->routes;
  }

  public function setRoutes(array $routes) {
    $this->routes = $routes;
  }
  
  // 
  protected function run($url) {
    foreach($this->getRoutes() as $key => $route) {
      // compara a rota acessada no index.php, com todas as $routes do atributo da classe.
      // caso encontre
      if($url == $route['route']) {
        // seta a classe do controller responsavel pela rota, atraves do namespace
        $class = "App\\Controllers\\".ucfirst($route['controller']);
        // cria uma instancia dessa classe
        // $controller = new App\Controllers\IndexController;
        $controller = new $class;
        // seta a action que será executada na classe
        $action = $route['action'];
        // executa a action da classe
        // $controller->sobreNos();
        $controller->$action();
      }
    }
  }

  protected function getUrl() {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}

?>