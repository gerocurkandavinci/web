<?php
 

function daoObtenerCategorias(){
    if(file_exists(DIR_BASE.'datos/categoria.json')){ 
        $cats = json_decode(file_get_contents(DIR_BASE.'datos/categoria.json'),TRUE);	
    }else{
        $cats = array();
    }

    return $cats;

}
 