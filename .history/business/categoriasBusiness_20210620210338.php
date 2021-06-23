<?php
include_once(DIR_BASE.'DAO/categoriasDao.php');

 
function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessGuardarCategoria($datos = array()){

    $id = daoGuardarCategoria($datos);
    

}

function businessObtenerCategoria($id){
 
    return daoObtenerCategorias($id);

}

function businessModificarCategoria($datos = array(), $id){
    
    daoModificarCategoria($datos,$id);

}

function businessBorrarCategoria($id){
    daoBorrarCategoria($id);
     
}