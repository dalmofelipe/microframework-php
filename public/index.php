<?php 

// ativa autoload na raiz da App e no diretorio MF
require_once "../vendor/autoload.php";

// index.php é o entry point do site
// a partir da instancia da classe Route
$route = new \App\Route;

?>

<!--
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/css/styles.css">
  <script>
    let dark = true
    function darkTheme(){
      let element = document.getElementsByTagName("body")[0];
      if(dark) {
        element.classList.remove('light')
        element.classList.add('dark')
      } else {
        element.classList.remove('dark')
        element.classList.add('light')
      }
      dark = !dark
    }
  </script>
</head>
<body>
  <div id="app">
    <button onclick="darkTheme()">Dark Theme</button>
    <h1>Olá Mundo!</h1>
    <h5><?#php echo 3/2; ?></h5>  
  </div>

  <script>
    window.onload = function() {
      darkTheme()
    }
  </script>
</body>
</html>
-->