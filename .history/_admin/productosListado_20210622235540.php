<?php

include('inc/header.php');
include('inc/sidebar.php');
include_once(DIR_BASE.'Business/productosBusiness.php');
include_once(DIR_BASE.'Business/categoriasBusiness.php');
include_once(DIR_BASE.'Business/marcasBusiness.php');

$marcas = businessObtenerMarcas();
$categorias = businessObtenerCategorias();


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
            <h1>Listado de Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Todos los Productos</li>
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
          <h3 class="card-title">Productos <a href="productosForm.php"><i class="fas fa-plus"></i></a></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <button style="padding-right:20px;margin-left:20px; align: center;margin-top:-10px;" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtra por categoria
          </button>             
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="float:left;list-inline;"> 
                  <?php
                    $categorias = businessObtenerCategorias();
                    foreach($categorias as $categoria){  
                    ?>
                    <ul class="list-inline"><li class="dl-horizontal"><a class="dropdown-item" href="productosListado.php?id=<?php echo $categoria['id'] ?>" type="button"  > 
                    <?php echo $categoria['nombre']?></a></li></ul>
                <?php
                }?>
                <ul class="list-inline"><li class="dl-horizontal"><a class="dropdown-item" href="productosListado.php?id=0" type="button">Todos</a></li></ul>                  
            </div>
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
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Categoría</th>
                      <th>Marca</th>
                      <th>Precio</th>
                      <th>Activo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach(businessObtenerProductos() as $prod){ ?>
                        <tr>
                            <td><?php echo $prod['id'] ?></td>
                            <td><?php echo $prod['nombre'] ?></td>
                            <td><?php echo $categorias[$prod['categoria']]['nombre'] ?></td>
                            <td><?php echo $marcas[$prod['marca']]['nombre'] ?></td>
                            <td><?php echo $prod['precio'] ?></td>
                            <td><?php echo $prod['activo']?'SI':'NO' ?></td>
                            <td>
                            <a href="productosForm.php?edit=<?php echo $prod['id']?>"> <i class="fas fa-th"></i></a>
                            <a href="productosListado.php?del=<?php echo $prod['id']?>"><i class="fas fa-trash"></i></a>
                            </td>
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
