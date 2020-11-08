<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    

</head>
<body>
    <a name="back" href="home/logout">Cerrar Sesion</a>
    <br>
    <h1>MUESTRA DATOS EN TIEMPO REAL</h1>
    <h1>Search</h1>
        <input name="search" type="text" placeholder="Titulo" id="search">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Subir datos
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="home/insert" method="POST">
                    <table>
                    <tbody>
                    <tr>
                    <td><input name="des" type="text" placeholder="Descripcion"></td>
                    </tr>
                    <tr>
                    <td><input name="tit" type="text" placeholder="Titulo"></td>
                    </tr>
                    </tbody>
                    </table>
                    <button type="submit">Ingresar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

    <?php error_reporting(0); foreach($data['getbooks'] as $libro):?>
        <table id="table" class="table-bordered">
            <tbody>
            <tr>
                <td>
                        Titulo
                </td>
                <td>
                  Descripcion
                </td>
                <td colspan="2">
                  Opciones
                </td>
            </tr>
            <tr>
                <td>
                <?php echo $libro['titulo'];?>
                </td>
                <td>
                    <?php echo $libro['descripcion'];?>
                </td>
                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                    Actualizar
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="home/update" method="POST">
                          <table>
                          <tbody>
                          <tr>
                          <td><input name="idU" value="<?php echo $libro['id'];?>" type="text" placeholder="id" >
                          <span>Id</span>
                        </td>
                          </tr>
                          <tr>
                          <td><input name="titU" value="<?php echo $libro['titulo'];?>" type="text" placeholder="titulo">
                            <span>Titulo</span>
                        </td>
                          </tr>
                          <tr>
                          <td><input name="desU" value="<?php echo $libro['descripcion'];?>" type="text" placeholder="descripcion">
                          <span>Descripcion</span>
                        </td>
                          </tr>
                          </tbody>
                          </table>
                          <button type="submit">Actualizar Datos</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">
                        Eliminar
                  </button>
                       <!-- Modal -->
                      <div class="modal fade" id="exampleModal1" tabindex="-1"     aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <h1>¿Desea eliminar el archivo?</h1>
                                <form action="home/Delete/<?php echo $libro['id'];?>">
                                    <button type="submit">Si</button>
                                </form>
                            <button type="button" class="close" data-dismiss="modal"    aria-label="Close" class="btn btn-primary">No</button>
                            </div>
                          </div>
                        </div>
                      </div>      
                </td>
            </tr>
            </tbody>
        </table>
        <?php endforeach ?> 
    <script>
        $("#search").keyup(function(){
            _this = this;
            // Muestra los tr que concuerdan con la busqueda, y oculta los  demás.
            $.each($("#table tbody "), function() {
                if($(this).text().toLowerCase().indexOf($(_this).val(). toLowerCase()) === -1)
                   $(this).hide();
                else
                   $(this).show();
            });
        });

    </script>
</body>
</html>