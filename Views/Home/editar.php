<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
</body>

    

    <h1>UPDATE</h1>
        <form action="../../home/Update" method="POST">
            <table>
                <tbody>
                    <tr>
                        <td>Id</td>
                        <td><input name="id" type="text" placeholder="Id" value="<?php echo $data['id'] ?>" readonly=""></td>
                    </tr>
                    <tr>
                        <td>Descripcion</td>
                        <td><input name="des" type="text" placeholder="Descripcion" value="<?php echo $data['descripcion'] ?>" ></td>
                    </tr>
                    <tr>
                        <td>Titulo</td>
                        <td><input name="tit" type="text" placeholder="Titulo" value="<?php echo $data['titulo'] ?>" ></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit">Editar</button>
        </form>
</html>
        