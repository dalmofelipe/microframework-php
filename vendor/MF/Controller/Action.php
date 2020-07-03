<?php

namespace MF\Controller;

abstract class Action {

  protected $view;

  public function __construct() {
    $this->view = new \stdClass();
  }

  protected function render($viewFileName, $layout) {
    $layoutPath = "../App/Views/".$layout.".phtml";
    $this->view->page = $viewFileName;
    if(file_exists($layoutPath))
      require_once $layoutPath;
    else {
      $this->content();
    }
  }

  protected function content() {
    $className = get_class($this); // App\Controllers\IndexController
    $className = str_replace('App\\Controllers\\', '', $className); // IndexController
    $className = strtolower(str_replace('Controller', '', $className)); // index
    require_once "../App/Views/".$className."/".$this->view->page.".phtml";
  }

} 

?>