<?php

function daoGuardarProducto($datos = array()){
     $productos = daoObtenerProductos();
     $id = date('Ymdhisu');
     $productos[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'precio' => $datos['precio'],
        'categoria' => $datos['categoria'],
        'marca' => $datos['marca'],
        'activa' => isset($datos['activa'])?'TRUE':'FALSE',
        'descripcion' => $datos['descripcion'],
        'imagen' => $datos['imagen']
    ); 
    file_put_contents(DIR_BASE.'datos/productos.json',json_encode($productos));
    return $id;

}

function daoObtenerProductos(){
    if(file_exists(DIR_BASE.'datos/productos.json')){ 
        $productos = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);	
    }else{
        $productos = array();
    }

    return $productos;

}

function daoObtenerProducto($id){
    $productos = daoObtenerProductos();  
    return $productos[$id];

}

function daoModificarProducto($datos = array(), $id){
    $productos = daoObtenerProductos();
    $productos[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'precio' => $datos['precio'],
       'categoria' => $datos['categoria'],
       'marca' => $datos['marca'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE',
       'descripcion' => $datos['descripcion'],
       'imagen' => $datos['imagen']
   ); 
   file_put_contents(DIR_BASE.'datos/productos.json',json_encode($productos));
}

function daoBorrarProducto($id){
     $productos = daoObtenerProductos();
     if(isset($productos[$id])){
        unset($productos[$id]); 
        /* $fp = fopen(DIR_BASE.'datos/productos.json','w');
            fwrite($fp, json_encode($productos));
            fclose($fp);
        */
        file_put_contents(DIR_BASE.'datos/productos.json',json_encode($productos));
     }
     
}