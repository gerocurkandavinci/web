<?php
 

function daoObtenerMarcas(){
    if(file_exists(DIR_BASE.'datos/marca.json')){ 
        $data = json_decode(file_get_contents(DIR_BASE.'datos/marca.json'),TRUE);	
    }else{
        $data = array();
    }

    return $data;

}
 