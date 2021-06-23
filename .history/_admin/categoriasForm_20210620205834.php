<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include('inc/header.php');


include('inc/sidebar.php');
include_once(DIR_BASE.'Business/productosBusiness.php');
include_once(DIR_BASE.'Business/categoriasBusiness.php');
include_once(DIR_BASE.'Business/marcasBusiness.php');

if(isset($_POST['submit'])){
  if(!empty($_GET['edit'])){
    businessModificarCategoria($_POST,$_GET['edit']);
  }else{
    businessGuardarCategoria($_POST);
  }

   redirect('categoriasListado.php');
}

$categoria = array( 'nombre' => '','activa' => '');
if(!empty($_GET['edit'])){
  $categoria = businessObtenerCategoria($_GET['edit']);
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Agregar/Editar Productos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary"> 
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $producto['nombre']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Categori¡ía</label>
                    <select name="categoria">
                      <?php foreach(businessObtenerCategorias() as $cat){?>
                        <option value="<?php echo $cat['id']?>" <?php echo ($cat['id'] == $producto['categoria'])?'selected':'' ?>> <?php echo $cat['nombre']?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Marca</label>
                    <select name="marca">
                    <?php foreach(businessObtenerMarcas() as $marca){?>
                        <option value="<?php echo $marca['id']?>" <?php echo ($marca['id'] == $producto['marca'])?'selected':'' ?> > <?php echo $marca['nombre']?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="precio" value="<?php echo $producto['precio']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Activo</label>
                    <input type="checkbox" class="form-check-label" id="exampleInputEmail1" value="true" name="activo" <?php echo ($producto['activo']==TRUE)?'checked':'' ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <textarea class="form-control" name="descripcion"><?php echo $producto['descripcion']?></textarea>
                  </div>
                 <div class="form-group">
                    <label for="exampleInputFile">Cargar imagen del producto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="imagen[]" multiple class="custom-file-input" id="exampleInputFile">  
                        <!--<input type="hidden" name="old_imagen" value="<?php //echo $producto['imagen'] ?>" class="custom-file-input" id="exampleInputFile">-->
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div> 
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

include('inc/footer.php'); 

?>
