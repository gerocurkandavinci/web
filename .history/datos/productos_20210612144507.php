<?php
$productos = array(
    '1' => array(
        "id"=>  "1",
        "categoria"=>  1,
        "marca"=> 1,
        "nombre"=>  "Entraña",
        "precio"=>  600,
        "activo"=>  true,
        "imagen"=>  "images/carne/parrilla/entraña.jpg"
    
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
        "nombre"=> "Tapa de asado",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/tapadeasado.jpg"
    
    ),
    '4' => array(
        "id"=> 4,
        "categoria"=> 1,
        "nombre"=> "Vacio",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/vacio.jpg"
    ),

    '5' => array(
        "id"=> 5,
        "categoria"=> 1,
        "nombre"=> "Asado",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/asado.jpg"
    ),

    '6' => array(
        "id"=> 6,
        "categoria"=> 2,
        "nombre"=> "Milanesa de cuadrada",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/milacuadrada.jpg"
    ),


    '7' => array(
        "id"=> 7,
        "categoria"=> 2,
        "nombre"=> "Milanesa de bola de lomo",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/miladeboladelomo.jpg"
    ),
    '8' => array(
        "id"=> 8,
        "categoria"=> 2,
        "nombre"=> "Milanesa de peceto",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/miladepeceto.jpg"
    ),
    '9' => array(
        "id"=> 9,
        "categoria"=> 2,
        "nombre"=> "Milanesa de nalga",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/milanalga.jpg"
    ),
    '10' => array(
        "id"=> 10,
        "categoria"=> 3,
        "nombre"=> "Colita de cuadril",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/colitadecuadril.jpg"
    ),
    '11' => array(
        "id"=> 11,
        "categoria"=> 3,
        "nombre"=> "Lomo",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/lomoconcordon.jpg"
    ),
    '12' => array(
        "id"=> 12,
        "categoria"=> 3,
        "nombre"=> "Peceto",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/peceto.jpg"
    ),
    '13' => array(
        "id"=> 13,
        "categoria"=> 3,
        "nombre"=> "Picada",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/picadaroffbeff.jpg"
    ),
    '14' => array(
        "id"=> 14,
        "categoria"=> 3,
        "nombre"=> "Picaña",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/Picaña.jpg"
    
    ),
    '15' => array(
        "id"=> 15,
        "categoria"=> 4,
        "nombre"=> "Bife ancho",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/bifeancho.jpg"
    ),
    '16' => array(
        "id"=> 16,
        "categoria"=> 4,
        "nombre"=> "Bife angosto",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/bifeangosto.jpg"
    ),
    '17' => array(
        "id"=> 17,
        "categoria"=> 4,
        "nombre"=> "Churrasquito de cuadril",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/churrascodecuadril.jpg"
    ),
    '18' => array(
        "id"=> 18,
        "categoria"=> 4,
        "nombre"=> "Churrasquito de paleta",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/churrascodepaleta.jpg"
    ),
    '19' => array(
        "id"=> 19,
        "categoria"=> 5,
        "nombre"=> "Chinchulin",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/chinchulin.jpg"
    ),
    '20' => array(
        "id"=> 20,
        "categoria"=> 5,
        "nombre"=> "Chorizo",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/chorizo.jpg"
    ),
    '21' => array(
        "id"=> 21,
        "categoria"=> 5,
        "nombre"=> "Falsa entraña",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/falsaentrana.jpg"
    ),
    '22' => array(
        "id"=> 22,
        "categoria"=> 5,
        "nombre"=> "Picada",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/picada.jpg"
    ),
    '23' => array(
        "id"=> 23,
        "categoria"=> 5,
        "nombre"=> "Riñon",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/rinon.jpg"
    ),

    );

  echo json_encode($productos);     

?>