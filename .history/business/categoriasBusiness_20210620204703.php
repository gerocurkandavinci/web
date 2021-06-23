<?php
include_once(DIR_BASE.'DAO/categoriasDao.php');

 
function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessGuardarCategoria($datos = array()){

    $id = daoGuardarCategoria($datos);
    
    
}