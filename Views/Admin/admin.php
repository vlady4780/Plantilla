<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
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
            <a class="navbar-brand" href="<?= BASE_URL(); ?>Admin/logout">Cerrar Sesión</a>
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
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
                <h1 class="text-center mt-3 mb-3">Sistema bibliotecario <small>Inicio</small></h1>
            </div>
            
            <div class="col-md-12 d-flex justify-content-center">
                <div class="container row">
                    <?php foreach($data as $car):?>
                        <div class="col-md-2 mt-4 mb-1 p-2 d-flex justify-content-center">
                            <div class="card">
                                <img src="<?= BASE_URL(); ?>Assets/img/<?php echo $car['Imagen'] ?>.png" class="card-img-top" style="width: 167px !important" alt="...">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center" style="height: 70px">
                                        <h6 class="card-title text-center"><?php echo $car['Nombre'] ?></h6>
                                    </div>
                                    
                                        <a href="#section2" style='cursor: pointer;' onclick="mostrarUsuario('<?php echo $car['Nombre'] ?>')" class="btn btn-success"><h6>Ver proyectos</h6></a>
                               
                                </div>
                            </div>                    
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-12">

                <div id="section2" class="row">
                    <div id="info">
                    
                    </div>
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
        </div>
        

    </div>
    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript">
	
	var resultado = document.getElementById("info");

	function mostrarUsuario(carrera){

		var xmlhttp;

		if(window.XMLHttpRequest){

			xmlhttp=new XMLHttpRequest();

		}else{

			xmlhttp = new ActiveXObject("Microsoft.XMLTTP");

		}

        var a = carrera;

		var informacion = "carrera=" + a;

	    xmlhttp.onreadystatechange = function(){

			if(xmlhttp.readyState === 4 && this.status === 200){

                resultado.innerHTML = this.responseText;

			}

		}

		xmlhttp.open("POST","<?= BASE_URL(); ?>Admin/getProjects",true);

        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");	
		
		xmlhttp.send(informacion);

	}

</script>

<script>

$(document).ready(function(){

    $('#sidebarCollapse').on('click',function(){

        $('#sidebar').toggleClass('active');

    });

});

</script>

</html>