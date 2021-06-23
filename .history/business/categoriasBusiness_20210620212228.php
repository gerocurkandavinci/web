<?php
include_once(DIR_BASE.'DAO/categoriasDao.php');

 

function businessGuardarCategoria($datos = array()){

    $id = daoGuardarCategoria($datos);
    

}

function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessObtenerCategoria($id){
 
    return daoObtenerCategoria($id);
   

}

function businessModificarCategoria($datos = array(), $id){
    
    daoModificarCategoria($datos,$id);

}

function businessBorrarCategoria($id){
    daoBorrarCategoria($id);
     
}