<?php
namespace App\Controllers;

use MF\Controller\Action;

class TablesController extends Action {

  public function tables() {
    $this->render('tables', 'layout');
  }
}
?>
