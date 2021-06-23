<?php
$newProduct = array(
    '1' => array(
        "id"=>  "1",
        "categoria"=>  1,
        "marca"=> 1,
        "nombre"=>  "Entraña",
        "precio"=>  600,
        "activo"=>  true,
        "imagen"=>  "/images/carne/parrilla/entraña.jpg"
    
        ),
    '2' => array(
        "id"=> 2,
        "categoria"=> 1,
        "marca"=> 1,
        "nombre"=> "Matambre",
        "precio"=> 600,
        "activo"=> true,
        "imagen" => "images/carne/parrilla/matambre.jpg"
    ),
    '3' => array(
        "id"=> 3,
        "categoria"=> 1,
        "marca"=> 1,
        "nombre"=> "Tapa de asado",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/tapadeasado.jpg"
    
    ),
    '4' => array(
        "id"=> 4,
        "categoria"=> 1,
        "marca"=> 1,
        "nombre"=> "Vacio",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/vacio.jpg"
    ),

    '5' => array(
        "id"=> 5,
        "categoria"=> 1,
        "marca"=> 1,
        "nombre"=> "Asado",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/asado.jpg"
    ),


    );

  echo json_encode($newProduct);     

?>