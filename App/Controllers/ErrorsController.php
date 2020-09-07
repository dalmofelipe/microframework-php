<?php
namespace App\Controllers;

use MF\Controller\Action;

class ErrorsController extends Action {

  public function error401() {
    $this->render('401', 'layout');
  }

  public function error404() {
    $this->render('404', 'layout');
  }

  public function error500() {
    $this->render('500', 'layout');
  }
}
?>