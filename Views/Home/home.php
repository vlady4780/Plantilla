<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tag_page'];?></title>
</head>
<body>
    <h1><?php echo $data['tag_title'];?></h1>
    <section id="<?php echo $data['tag_name'] ;?>">
       <p id="<?php echo $data['pag_id'];?>">
            <?php echo $data['pag_content'];?>
       </p>
    </section>
    <a name="back" href="home/logout">Cerrar Sesion</a>
    <form action="home/insert" method="post">
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
    <?php foreach($data['getbooks'] as $libro):?>
        <table>
            <thead>
                <th>
                    <td>
                        Titulo
                    </td>
                    <td>
                        Descripcion
                    </td>
                </th>
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php echo $libro['titulo'];?>
                </td>
                <td>
                    <?php echo $libro['descripcion'];?>
                </td>
            </tr>
            </tbody>
        </table>
        <?php endforeach ?>
</body>
</html>