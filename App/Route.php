<?php  
namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

  // seta cada configuracao de $routes ao atribuda da classe
  public function initRoutes() {
    $routes['home'] = array(
      "route" => "/",
      "controller" => "indexController",
      "action" => 'index' 
    );
    $routes['micro'] = array(
      "route" => "/micro",
      "controller" => "indexController",
      "action" => 'micro' 
    );
    $routes['dropdown'] = array(
      "route" => "/dropdown",
      "controller" => "indexController",
      "action" => 'dropdown' 
    );
    $routes['static'] = array(
      "route" => "/static",
      "controller" => "indexController",
      "action" => 'static' 
    );
    $routes['change-thema'] = array(
      "route" => "/change-thema",
      "controller" => "indexController",
      "action" => 'change_thema' 
    );

    // rotas para charts
    $routes['charts'] = array(
      "route" => "/charts",
      "controller" => "chartsController",
      "action" => 'charts' 
    );

    // rotas para tables
    $routes['tables'] = array(
      "route" => "/tables",
      "controller" => "tablesController",
      "action" => 'tables' 
    );

    // ROTAS DE ERROS
    $routes['401'] = array(
      "route" => "/401",
      "controller" => "errorsController",
      "action" => 'error401' 
    );
    $routes['404'] = array(
      "route" => "/404",
      "controller" => "errorsController",
      "action" => 'error404' 
    );
    $routes['500'] = array(
      "route" => "/500",
      "controller" => "errorsController",
      "action" => 'error500' 
    );

    // ROTAS PARA LOGIN
    $routes['login'] = array(
      "route" => "/login",
      "controller" => "authController",
      "action" => 'login' 
    );
    $routes['password'] = array(
      "route" => "/password",
      "controller" => "authController",
      "action" => 'password' 
    );
    $routes['register'] = array(
      "route" => "/register",
      "controller" => "authController",
      "action" => 'register' 
    );

    $this->setRoutes($routes);
  }
}
?>