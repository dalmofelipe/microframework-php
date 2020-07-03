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
    $routes['sobre_nos'] = array(
      'route' => '/sobre_nos',
      'controller' => 'indexController',
      'action' => 'sobre_nos' // função no controlee deve ter o mesmo nome dessa action
    );
    $routes['bruxao'] = array(
      'route' => '/bruxao',
      'controller' => 'indexController',
      'action' => 'bruxao'
    );
    $this->setRoutes($routes);
  }

}

?>