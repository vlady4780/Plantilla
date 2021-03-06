<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registrar Libro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?= BASE_URL(); ?>Assets/icons/book.ico" />
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
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Añadir libro</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?= BASE_URL(); ?>Assets/img/project.png" alt="pdf" class="img-responsive center-box" style="max-width: 200px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar nuevos libros a la biblioteca, deberas de llenar todos los campos para poder registrar el libro
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Nuevo Proyecto</div>
                <?php error_reporting(0); if($data): ?>

                    <form class="form-padding" action="<?= BASE_URL(); ?>home/Update" method="POST">
                        <div class="row">
                            <input type="hidden" name="id" value=<?php echo $data['Cod_Proyecto'];?>>
                            <div class="col-xs-12">
                                <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información General</legend><br>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input name="tit" type="text" value=<?php echo $data['Titulo'];?> class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required="" data-toggle="tooltip" data-placement="top">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Titulo</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                <td><input name="esp" type="text" value=<?php echo $data['Especialidad'];?> placeholder="Especialidad" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required=""  data-toggle="tooltip" data-placement="top"></td>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Especialidad</label>
                                </div>
                            </div>
  
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input name="aut" type="text" value=<?php echo $data['Autor'];?> placeholder="Autor" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required="" data-toggle="tooltip" data-placement="top">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Autor</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                <input name="sed" type="text" value=<?php echo $data['Sede'];?> placeholder="Sede" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required=""  data-toggle="tooltip" data-placement="top">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Sede</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input type="text" name="age" value=<?php echo $data['Año'];?> class="tooltips-general material-control" placeholder="Escribe aquí el año donde desarrollo el proyecto" required=""  data-toggle="tooltip" data-placement="top" title="Escribe el país del libro">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Año</label>
                                </div>
                            </div>
                            

                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input type="file" name="archivo" class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Escribe el país del libro">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Proyecto</label>
                                </div>
                            </div>
                            
                            <div class="col-xs-12">
                                <p class="text-center">
                                    <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                    <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                </p>
                            </div>
                        </div>
                    </form>

                <?php endif;?>

                <?php if(!$data):?>

                    <form class="form-padding" action="<?= BASE_URL(); ?>home/insert" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12">
                                <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información General</legend><br>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input name="tit" type="text" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required="" maxlength="20" data-toggle="tooltip" data-placement="top">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Titulo</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                <td><input name="esp" type="text" placeholder="Especialidad" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required="" maxlength="20" data-toggle="tooltip" data-placement="top"></td>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Descripcion</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input type="text" name="especialidad" class="tooltips-general material-control" placeholder="Escribe aquí la carrera del estudiante" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del autor del libro">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Especialidad</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input name="aut" type="text" placeholder="Autor" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required="" maxlength="20" data-toggle="tooltip" data-placement="top">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Autor</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                <input name="sed" type="text" placeholder="Sede" class="tooltips-general material-control" placeholder="Escribe aquí el titulo del proyecto" required="" maxlength="20" data-toggle="tooltip" data-placement="top">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Sede</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input type="text" name="age" class="tooltips-general material-control" placeholder="Escribe aquí el año donde desarrollo el proyecto" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el país del libro">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Año</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="group-material">
                                    <input type="file" id="archivo" name="archivo" class="tooltips-general material-control"  maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el país del libro">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Proyecto</label>
                                </div>
                            </div>
                            
                            <div class="col-xs-12">
                                <p class="text-center">
                                    <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                    <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                </p>
                            </div>
                        </div>
                    </form>

                <?php endif;?>

            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                         
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">

                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles"></div>
        </footer>
    </div>
</body>
</html>