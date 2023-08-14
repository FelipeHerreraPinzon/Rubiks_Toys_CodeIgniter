<?= $header ?>

<a href="<?=base_url('crear')?>" class="btn btn-success">CREAR PRODUCTO</a>
    <div class="">
        <table class="table table-primary table-bordered text-center justify-content">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>


<?php  foreach($productos as $producto): ?>


                <tr>
                    <td><h4 class="mt-4"><?= $producto['id'] ?></h4></td>
                    <td><h4 class="mt-4"><?= $producto['nombre'] ?></h4></td>
                    <td><h4 class="mt-4"><?= $producto['descripcion'] ?></h4></td>

                    <td><img src="<?=base_url()?>/uploads/<?= $producto['imagen'] ?>" alt="" width="150"></td>  
                    
                    <td>
                        <a href="<?=base_url('editar/'.$producto['id']);?>" class="btn btn-warning mt-4"><h3>EDITAR</h3></a>
                        <a href="<?=base_url('borrar/'.$producto['id']);?>" onclick="return confirm('¿ ELIMINAR ESTE PRODUCTO ?')" class="btn btn-danger mt-4 "><h3>BORRAR</h3></a>
                
                </td>
                </tr>

<?php  endforeach; ?>
            </tbody>
        </table>

<?= $footer ?>