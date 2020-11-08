<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tag_page'];?></title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    

</head>
<body>
    <h1><?php echo $data['tag_title'];?></h1>
    <section id="<?php echo $data['tag_name'] ;?>">
       <p id="<?php echo $data['pag_id'];?>">
            <?php echo $data['pag_content'];?>
       </p>
    </section>
    <a name="back" href="home/logout">Cerrar Sesion</a>

    <br>
    <h1>MUESTRA DATOS EN TIEMPO REAL</h1>

    <script>
    $("#search").keyup(function(){
        _this = this;
        // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
        $.each($("#table tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();
        });
    });

</script>



    <h1>Search</h1>
        <input name="search" type="text" placeholder="Titulo" id="search">



    <?php foreach($data['getbooks'] as $libro):?>
        <table id="table">
            <tbody>
            <tr>
                <td>
                        Titulo
                </td>
                <td>
                    <?php echo $libro['titulo'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Descripcion
                </td>
                <td>
                    <?php echo $libro['descripcion'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Editar
                </td>
                <td>
                    <a href="home/veditar/<?php echo $libro['id'] ?>">Editar </a>
                </td>
            </tr>
            <tr>
                <td>
                    Eliminar
                </td>
                <td>
                    <a href="home/Delete/<?php echo $libro['id'] ?>">Eliminar </a>
                </td>
            <tr>
            </tbody>
        </table>
        <?php endforeach ?>
        
        <a href="home/veinsertar">Subir datos</a>
         
        
        
        






</body>
</html>