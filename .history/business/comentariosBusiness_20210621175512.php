<?php

include_once(DIR_BASE.'DAO/comentariosDao.php');


function businessGuardarComentario($datos = array()){
    daoGuardarComentario($datos);
}

function businessObtenerComentarios(){
    return daoObtenerComentarios();
}

function businessObtenerComentario($id){
    return daoObtenerComentarios();   

}

function businessModificarComentario($datos = array(), $id){
    daoModificarComentario($datos, $id);
}

function businessBorrarComentario($id){
    daoBorrarComentario($id);
}

// function businessfiltraComentarios($id){
//     $comentarios = businessObtenerComentarios();
//     $productos =  json_decode(file_get_contents(DIR_BASE.'datos/productos.json'),TRUE);

//     foreach($comentarios as $c)
//     {
//         if($producto['id'] == $c['producto'])
//         {

//         }
//     }

// }

?>