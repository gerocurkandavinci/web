<?php
include_once(DIR_BASE.'DAO/marcasDao.php');

 
function businessGuardarMarca($datos = array()){

    $id = daoGuardarMarca($datos);
    

}

function businessObtenerMarcas(){
 
    return daoObtenerMarcas();

}

function businessObtenerMarca($id){
 
    return daoObtenerMarca($id);
   

}

function businessModificarMarca($datos = array(), $id){
    
    daoModificarMarca($datos,$id);

}

function businessBorrarMarca($id){
    daoBorrarMarca($id);
     
}