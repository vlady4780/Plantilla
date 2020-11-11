<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proyecto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>Assets/css/bootstrap.css?1.0">
    <style>
        html{
            scroll-behavior: smooth !important;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="navbar-brand ml-auto" href="#">
                <div class="row">
                    <div class="col-xs-6 mt-3">
                        <h5>Admin name</h5>
                    </div>
                    <div class="col-xs-6">
                        <img src="<?= BASE_URL(); ?>Assets/img/Admin.png" width="50" height="50" class="d-inline-block align-top ml-3" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </nav>
        
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
                <h1 class="text-center mt-3 mb-5 text-uppercase font-weight-bold">"<?php echo $data['Titulo'] ?>"</h1>
            </div>

            <div class="col-md-6">
                <iframe src="<?= BASE_URL() ?>/Docs/<?php echo $data['Nombre_archivo'] ?>" style="width:600px; height:400px;" frameborder="0"></iframe>
            </div>

            <div class="col-md-6">
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-xs-6 mr-3">
                            <h4 class="font-weight-bold">Especialidad: </h4>
                        </div>
                        <div class="col-xs-6">
                            <h4><?php echo $data['Especialidad'] ?></h4>
                        </div>     
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-xs-6 mr-3">
                            <h4 class="font-weight-bold">Autor: </h4>
                        </div>
                        <div class="col-xs-6">
                            <h4><?php echo $data['Autor'] ?></h4>
                        </div>     
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-xs-6 mr-3">
                            <h4 class="font-weight-bold">Sede: </h4>
                        </div>
                        <div class="col-xs-6">
                            <h4><?php echo $data['Sede'] ?></h4>
                        </div>     
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-xs-6 mr-3">
                            <h4 class="font-weight-bold">Año: </h4>
                        </div>
                        <div class="col-xs-6">
                            <h4><?php echo $data['Año'] ?></h4>
                        </div>     
                    </div>
                </div>

                <div class="col-md-12">
                
                    <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripción</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Multimedia</a>
                            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Enlace</a>
                    </div>
                    </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis vel rem excepturi odit facilis illum assumenda et iste fugit doloremque provident repellat esse repellendus, ex ea ipsa labore quam sunt!</div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <a class="mt-5" href="<?= BASE_URL() ?>/Docs/<?php echo $data['Nombre_archivo'] ?>" download><?php echo $data['Nombre_archivo'] ?></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>