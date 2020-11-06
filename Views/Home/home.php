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
    
</body>
</html>