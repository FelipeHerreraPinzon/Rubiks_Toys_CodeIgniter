<?= $header ?>


<div class="card mt-5">
    <div class="card-header bg bg-success">
        <h1 class="bg bg-success text-white">CREAR PRODUCTO</h1>
    </div>
    <div class="card-body bg bg-info">
    <form action="<?=site_url('/guardar')?>" method="post" enctype="multipart/form-data">



<div class="form-group">
  <label for="nombre">NOMBRE</label>
  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="ingrese nombre" required>

</div>
<br>
<br>
<div class="form-group">
  <label for="nombre">DESCRIPCION</label>
  <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="ingrese descripcion" required>

</div>
<br>
<br>

<div class="form-group">
  <label for="nombre">IMAGEN</label>
  <input type="file" name="imagen" id="imagen" class="form-control" placeholder="ingrese nombre" required>

</div>

<br>
<br>

<input type="submit" class="btn btn-success" value="CREAR">

<a href="<?=base_url('/');?>" class="btn btn-danger">CANCELAR</a>



</form>

    </div>
    <div class="card-footer text-muted bg bg-warning">
        
    </div>
</div>





<?= $footer ?>