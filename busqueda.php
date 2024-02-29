<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/header.css">
    <link rel="stylesheet" href="./estilos/busqueda.css">
</head>
<body>
<header class="header" role="banner">
        <h1 class="logo">
          <a href="#">Lawyers <span>Type</span></a>
        </h1>
        <div class="nav-wrap">
          <nav class="main-nav" role="navigation">
            <ul class="unstyled list-hover-slide">
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
              <li><a href="#">Lawyer X</a></li>
            </ul>
          </nav>
          
        </div>
      </header>
      <nav class="mobile">
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          
          <div class="menu-items">
            <li>Tipos de abogados</li>
            <li><a href="#">Abogado X</a></li>
            <li><a href="#">Abogado X</a></li>
            <li><a href="#">Abogado X</a></li>
            <li><a href="#">Abogado X</a></li>
            <li><a href="#">Abogado X</a></li>
          </div>
        </div>
      </div>
    </nav>
      <main>
        <div class="content-div">
    <?php
require 'vendor/autoload.php';

use Goutte\Client;
use voku\helper\HtmlDomParser;

function buscarAbogado($apellido) {
    $client = new Client();

   
    $crawler = $client->request('GET', 'https://www.organojudicial.gob.pa/appsadd/abogado/s4abi.php');


    $form = $crawler->selectButton('enviar')->form();
    $form['apellido'] = $apellido;
    $crawler = $client->submit($form);

    
    sleep(2); 
 
    $content = $client->getResponse()->getContent();


    $dom = HtmlDomParser::str_get_html($content);


    $tabla = $dom->find('table', 0);

    if ($tabla) {
        $tabla->class = 'table-responsive-sm';

        echo $tabla->outerHtml();
    } else {
        echo 'No se encontraron resultados';
    }
}

$apellidoBuscado = $_GET["apellido"];
buscarAbogado($apellidoBuscado);
?>
        </div>
        <a href="wa.link/v35d7h" class="whatsapp">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg></a>
</main>
</body>
</html>
