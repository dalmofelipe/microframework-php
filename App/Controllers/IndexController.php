<?php
namespace App\Controllers;
session_start();

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {

  // action da rota para raiz: /
  public function index() {
    $produto = Container::getModel('Produto');
    $produtos = $produto->getProdutos();
    $this->view->dados = $produtos;
    $this->render('index', 'layout');
  }

  public function micro() {
    $this->render('micro', 'layout');
  }
  
  public function dropdown() {
    $this->render('dropdown', 'layout');
  }

  public function static() {
    $this->render('layout-static', 'layout');
  }

  public function change_thema() {
    $_SESSION['theme'] = $_SESSION['theme'] == 'Light' ? 'Dark' : 'Light';
    
    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>'; 

    $url = $_SERVER[HTTP_REFERER];
    header("Location: $url");
    // $this->render('layout-sidenav-light', 'layout');
  }
}
?>
