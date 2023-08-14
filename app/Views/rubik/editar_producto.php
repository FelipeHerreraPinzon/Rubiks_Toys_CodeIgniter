<?= $header ?>


<div class="card mt-5">
    <div class="card-header bg bg-warning">
       <h1>EDITAR PRODUCTO</h1>
    </div>
    <div class="card-body bg bg-info">
    <form action="<?=site_url('/actualizar')?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?=$producto['id']?>">

<div class="form-group">
  <label for="nombre">NOMBRE</label>
  <input type="text" name="nombre" id="nombre" class="form-control" value="<?=$producto['nombre']?>" placeholder="ingrese nombre" >

</div>
<br>
<br>
<div class="form-group">
  <label for="nombre">DESCRIPCION</label>
  <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?=$producto['descripcion']?>" placeholder="ingrese descripcion" >

</div>
<br>
<br>

<div class="form-group">
  <label for="nombre">IMAGEN</label>
  <img src="<?=base_url()?>/uploads/<?= $producto['imagen'] ?>" alt="" width="100">
  <input type="file" name="imagen" id="imagen" class="form-control" placeholder="ingrese nombre" >

</div>

<br>
<br>

<input type="submit" class="btn btn-success" value="ACTUALIZAR">

<a href="<?=base_url('/');?>" class="btn btn-danger">CANCELAR</a>



</form>

    </div>
    <div class="card-footer text-muted bg bg-warning">
        
    </div>
</div>





<?= $footer ?>