<?php

include('inc/header.php');
include('inc/sidebar.php');
include_once(DIR_BASE.'Business/productosBusiness.php');
include_once(DIR_BASE.'Business/categoriasBusiness.php');
include_once(DIR_BASE.'Business/marcasBusiness.php');
include_once(DIR_BASE.'Business/comentariosBusiness.php');


$marcas = businessObtenerMarcas();
$categorias = businessObtenerCategorias();

$Comentarios = businessObtenerComentarios();
$productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);
//$Comentario = businessObtenerComentario();


if(isset($_GET['del'])){
    businessBorrarProducto($_GET['del']);
    redirect('productosListado.php');
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Comentarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Listado de Comentarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
         <!-- <h3 class="card-title">Comentarios <a href="productosForm.php"><i class="fas fa-plus"></i></a></h3> -->
         <!-- <select name="select"> -->
             <!-- <option value="value1">Value 1</option> -->
              <select class="filter__list">
                   <?php
                      $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);

                       foreach($productos as $producto){   
                        ?>
                        <!-- <option><a href="?categoria=<?php echo $cat['id']?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><?php echo $cat['nombre']?></a></option> -->
                        <option><a href="comentariosListado.php?producto=<?php echo $producto['id']?>"><?php echo $producto['nombre']?></a></option>
                        <?php
                        } ?>
                          <option><a href="?categoria=&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>">Todas</a></option>  
               </select>
               <button style="margin: 3px;" type="button" class="btn-xs btn-primary">Filtrar</button>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Producto</th>
                      <th>Comentario</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach(businessObtenerComentarios() as $Coment){ ?>
                        <tr>
                            <td><?php echo $Coment['fecha'] ?></td>
                            <td><?php echo $Coment['nombre'] ?></td>
                            <td><?php echo $Coment['email'] ?></td>
                            <td><?php echo $productos[$Coment['producto']]['nombre'] ?></td>
                            <td><?php echo $Coment['comentario'] ?></td> 
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
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
