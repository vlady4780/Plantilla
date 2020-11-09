<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?= BASE_URL(); ?>Assets/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/sweet-alert.css">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/normalize.css">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= BASE_URL(); ?>Assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?= BASE_URL(); ?>Assets/js/modernizr.js"></script>
    <script src="<?= BASE_URL(); ?>Assets/js/bootstrap.min.js"></script>
    <script src="<?= BASE_URL(); ?>Assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= BASE_URL(); ?>Assets/js/main.js"></script>
</head>
<body>
    <?php require_once ('Views/navbar.php') ?>
    
    <div class="content-page-container full-reset custom-scroll-containers">
    <?php require_once ('Views/nav.php') ?>
      <div class="container">
              <div class="page-header">
                <h1 class="all-tittles">Sistema bibliotecario <small>Catálogo de libros</small></h1>
              </div>
          </div>
          <div class="container-fluid"  style="margin: 40px 0;">
              <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-3">
                      <img src="assets/img/checklist.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                      Bienvenido al catálogo, selecciona una categoría de la lista para empezar, si deseas buscar un libro por nombre o título has click en el icono &nbsp; <i class="zmdi zmdi-search"></i> &nbsp; que se encuentra en la barra superior
                  </div>
              </div>
      </div>
      <div class="container-fluid">
        <h1>Search</h1>
        <br>
        <input id="myInput" class="form-control " type="text" onkeyup="myFunction()" placeholder="Titulo" id="search">
        <br><br>
      </div>
    
      <ul id="myUL" class="container-fluid" style="list-style: none !important">
        <?php error_reporting(0); foreach($data['getbooks'] as $libro):?>
          <li>
            <div class="media-left media-middle">
                
              <img class="media-object" src="<?= BASE_URL(); ?>Assets/img/book1.png" alt="Libro" width="48" height="48">
               
            </div>
            <div class="media-body" id="table">
                  <a href="#"><h4 class="media-heading"><?php echo $libro['Titulo']?></h4></a>
                  <div class="pull-left">
                      <strong><?php echo $libro['Autor']?><br>
                      <strong><?php echo $libro['Año']?><br>
                  </div>
                  <div class="pull-right row">
                      <form class="col-md-6" action="<?= BASE_URL(); ?>Admin/insertView/<?php echo $libro['Cod_Proyecto'] ?>">
                        <button class="btn btn-primary">Editar</button>
                      </form>
                      <form class="col-md-6" action="<?= BASE_URL(); ?>Admin/Delete/<?php echo $libro['Cod_Proyecto'] ?>">
                        <button class="btn btn-danger">Eliminar</button>
                      </form>
                  </div>        
            </div>                     
          </li> 
        <?php endforeach ?>
      </ul>
    </div>
</body>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</html>