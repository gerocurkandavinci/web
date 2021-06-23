<?php
 

 function daoGuardarMarca($datos = array()){
    $marcas = daoObtenerMarcas();
    $id = date('Ymdhisu');
    $categorias[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE'
       
   ); 
   file_put_contents(DIR_BASE.'datos/marca.json',json_encode($marcas));
   return $id;

}


function daoObtenerMarcas(){
    if(file_exists(DIR_BASE.'datos/marca.json')){ 
        $data = json_decode(file_get_contents(DIR_BASE.'datos/marca.json'),TRUE);	
    }else{
        $data = array();
    }

    return $data;

}
 