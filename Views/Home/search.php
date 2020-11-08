<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>RESULTADO DE LA BUSQUEDA</h1>
    
      <?php foreach($data['Search'] as $libro):?>
        <table>
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
            
            
        </table>
        <?php endforeach ?>




</body>
</html>