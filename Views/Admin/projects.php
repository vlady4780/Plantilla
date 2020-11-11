<?php print_r($request) ?>

<table class="table-bordered table-responsive">
    <?php foreach($request as $book):?>
        <tr>
              
            <td><?php echo $book['Descripcion'];?></td>
            <td><?php echo $book['Titulo'];?></td>
            <td><?php echo $book['Autor'];?></td>
            <td><?php echo $book['Sede'];?></td>
            <td><?php echo $book['Año'];?></td>
                  
        </tr>
    <?php endforeach;?>
</table>