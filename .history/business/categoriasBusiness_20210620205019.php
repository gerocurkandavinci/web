<?php
include_once(DIR_BASE.'DAO/categoriasDao.php');

 
function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessGuardarCategoria($datos = array()){

    $id = daoGuardarCategoria($datos);
    

}

function businessObtenerCategoria($id){
 
    return daoObtenerCategoria($id);

}

function businessModificarCategoria($datos = array(), $id){
    
    daoModificarCategoria($datos,$id);

   
//die();   
}