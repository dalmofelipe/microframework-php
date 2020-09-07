<?php
namespace App\Controllers;

use MF\Controller\Action;

class AuthController extends Action {

  public function login() {
    $this->render('login', 'layout');
  }

  public function password() {
    $this->render('password', 'layout');
  }

  public function register() {
    $this->render('register', 'layout');
  }
}
?>