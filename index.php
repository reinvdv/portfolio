<?php
//CONFIGURATIE
require 'settings/config.php';
//HEAD
require 'views/head.php';
//HEADER
require 'views/header.php';
//SITE-CONTENT
$page = isset($_GET['page']) ? $_GET['page'] : 'index';
// session_start();
switch ($page) {
  case 'index':
    include 'views/home.php';
  break;
  //OVERIGE PAGINA'S
  case 'contact':
    include 'views/contact.php';
  break;
  case 'about':
    include 'views/about.php';
  break;
  case 'projects':
    include 'views/projects.php';
  break;
  case 'cv':
    include 'views/cv.php';
  break;
  // case 'onsbrood':
  //   include 'views/detail-project/onsbrood.php';
  // break;
  // case 'thewall':
  //   include 'views/detail-project/thewall.php';
  // break;
  case 'project':
    include 'views/project.php';
  break;
  //STANDAARD PAGINA: 404 ERROR
  default:
    include 'views/error.html';
  break;
}
//FOOTER
require 'views/footer.php';
?>
<script src="/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>document.body.className += ' fade-out';</script>
