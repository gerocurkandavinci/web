<?php
 
function daoGuardarCategoria($datos = array()){
    $categorias = daoObtenerCategorias();
    $id = date('Ymdhisu');
    $categorias[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE'
       
   ); 
   file_put_contents(DIR_BASE.'datos/categoria.json',json_encode($categorias));
   return $id;

}

function daoObtenerCategorias(){
    if(file_exists(DIR_BASE.'datos/categoria.json')){ 
        $cats = json_decode(file_get_contents(DIR_BASE.'datos/categoria.json'),TRUE);	
    }else{
        $cats = array();
    }

    return $cats;

}
 
function daoModificarCategoria($datos = array(), $id){
    $categorias = daoObtenerCategorias();
    $categorias[$id] = array(
        'id' => $id,
        'nombre' => $datos['nombre'],
        'activa' => isset($datos['activa'])?'TRUE':'FALSE'
   ); 
   file_put_contents(DIR_BASE.'datos/categoria.json',json_encode($categorias));
}

function daoBorrarCategoria($id){
    $categorias = daoObtenerCategorias();
    if(isset($categorias[$id])){
       unset($categorias[$id]); 
      
       file_put_contents(DIR_BASE.'datos/categoria.json',json_encode($categorias));
    }
    
}