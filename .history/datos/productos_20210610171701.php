<?php

// $productos = array(
//     '1' =>  array(
//             'id' => 1,
//             'nombre' => 'Remeras Nike',
//             'precio' => 150,
//             'categoria' => 1,
//             'marca' => 1,
//             'activa' => TRUE,
//             'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
//             'imagen' => 'a.jpg'
//         ),
//     '3' =>  array(
//         'id' => 3,
//         'nombre' => 'Pantalon Adidas',
//         'precio' => 150,
//         'categoria' => 2,
//         'marca' => 2,
//         'activa' => TRUE,
//         'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
//         'imagen' => 'b.jpg'
//     ),
//     '4' =>  array(
//         'id' => 4,
//         'nombre' => 'Remeras Adidas',
//         'precio' => 150,
//         'categoria' => 1,
//         'marca' => 2,
//         'activa' => TRUE,
//         'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
//         'imagen' => 'c.jpg'
//     ),
//     '5' =>  array(
//         'id' => 5,
//         'nombre' => 'Pantalon Nike',
//         'precio' => 150,
//         'categoria' => 2,
//         'marca' => 1,
//         'activa' => TRUE,
//         'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
//         'imagen' => 'd.jpg'
//     ),
//     );

// echo json_encode($productos);

$productos = array(
    '1' => array(
        "id"=>  "1",
        "tipo"=>  "Parrilla",
        "nombre"=>  "Entraña",
        "precio"=>  600,
        "activo"=>  true,
        "imagen"=>  "images/carne/parrilla/entraña.jpg"
    
        ),
    '2' => array(
        "id"=> 2,
        "tipo"=> "Parrilla",
        "nombre"=> "Matambre",
        "precio"=> 600,
        "activo"=> true,
        "imagen" => "images/carne/parrilla/matambre.jpg"
    ),
    '3' => array(
        "id"=> 3,
        "tipo"=> "Parrilla",
        "nombre"=> "Tapa de asado",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/tapadeasado.jpg"
    
    ),
    '4' => array(
        "id"=> 4,
        "tipo"=> "Parrilla",
        "nombre"=> "Vacio",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/vacio.jpg"
    ),

    '5' => array(
        "id"=> 5,
        "tipo"=> "Parrilla",
        "nombre"=> "Asado",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/parrilla/asado.jpg"
    ),

    '6' => array(
        "id"=> 6,
        "tipo"=> "Milanesas",
        "nombre"=> "Milanesa de cuadrada",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/milacuadrada.jpg"
    ),


    '7' => array(
        "id"=> 7,
        "tipo"=> "Milanesas",
        "nombre"=> "Milanesa de bola de lomo",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/miladeboladelomo.jpg"
    ),
    '8' => array(
        "id"=> 8,
        "tipo"=> "Milanesas",
        "nombre"=> "Milanesa de peceto",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/miladepeceto.jpg"
    ),
    '9' => array(
        "id"=> 9,
        "tipo"=> "Milanesas",
        "nombre"=> "Milanesa de nalga",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/milanesas/milanalga.jpg"
    ),
    '10' => array(
        "id"=> 10,
        "tipo"=> "Gourmet",
        "nombre"=> "Colita de cuadril",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/colitadecuadril.jpg"
    ),
    '11' => array(
        "id"=> 11,
        "tipo"=> "Gourmet",
        "nombre"=> "Lomo",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/lomoconcordon.jpg"
    ),
    '12' => array(
        "id"=> 12,
        "tipo"=> "Gourmet",
        "nombre"=> "Peceto",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/peceto.jpg"
    ),
    '13' => array(
        "id"=> 13,
        "tipo"=> "Gourmet",
        "nombre"=> "Picada",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/picadaroffbeff.jpg"
    ),
    '14' => array(
        "id"=> 14,
        "tipo"=> "Gourmet",
        "nombre"=> "Picaña",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/gourmet/Picaña.jpg"
    
    ),
    '15' => array(
        "id"=> 15,
        "tipo"=> "Bifes",
        "nombre"=> "Bife ancho",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/bifeancho.jpg"
    ),
    '16' => array(
        "id"=> 16,
        "tipo"=> "Bifes",
        "nombre"=> "Bife angosto",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/bifeangosto.jpg"
    ),
    '17' => array(
        "id"=> 17,
        "tipo"=> "Bifes",
        "nombre"=> "Churrasquito de cuadril",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/churrascodecuadril.jpg"
    ),
    '18' => array(
        "id"=> 18,
        "tipo"=> "Bifes",
        "nombre"=> "Churrasquito de paleta",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/bifes/churrascodepaleta.jpg"
    ),
    '19' => array(
        "id"=> 19,
        "tipo"=> "Achuras",
        "nombre"=> "Chinchulin",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/chinchulin.jpg"
    ),
    '20' => array(
        "id"=> 20,
        "tipo"=> "Achuras",
        "nombre"=> "Chorizo",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/chorizo.jpg"
    ),
    '21' => array(
        "id"=> 21,
        "tipo"=> "Achuras",
        "nombre"=> "Falsa entraña",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/falsaentrana.jpg"
    ),
    '22' => array(
        "id"=> 22,
        "tipo"=> "Achuras",
        "nombre"=> "Picada",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/picada.jpg"
    ),
    '23' => array(
        "id"=> 23,
        "tipo"=> "Achuras",
        "nombre"=> "Riñon",
        "precio"=> 600,
        "activo"=> true,
        "imagen"=> "images/carne/achuras/rinon.jpg"
    ),

    );

  echo json_encode($productos);     

?>