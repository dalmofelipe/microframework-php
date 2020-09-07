<?php
namespace App\Controllers;

use MF\Controller\Action;

class ChartsController extends Action {

  public function charts() {
    $this->render('charts', 'layout');
  }
}
?>
