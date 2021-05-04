<?php 
$categorias = array(
        '1' => array(
            'id'=>'1',
            'nombre'=> 'Parrilla',
            'Activa'=> True
            ),
        '2' => array(
            'id'=>'2',
            'nombre'=> 'Milanesas',
             'activa' => True
            ),
        '3' => array(
            'id'=>'3',
            'nombre'=> 'Gourmet',
             'activa' => True
            ),
        '4' => array(
            'id'=>'4',
            'nombre'=> 'Bifes',
            'Activo' => True
            ),  
        '5' => array(
            'id'=>'4',
            'nombre'=> 'Achuras',
             'Activo' => True
            ),  
        );

     echo json_encode($categorias);

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
                "id": 6,
                "tipo": "Milanesas",
                "nombre": "Milanesa de cuadrada",
                "precio": 600,
                "activo": true,
                "imagen": "images/carne/milanesas/milacuadrada.jpg"
            ),


            '7' => array(
                "id": 7,
                "tipo": "Milanesas",
                "nombre": "Milanesa de bola de lomo",
                "precio": 600,
                "activo": true,
                "imagen": "images/carne/milanesas/miladeboladelomo.jpg"
            ),
            '8' => array(
                "id": 8,
                "tipo": "Milanesas",
                "nombre": "Milanesa de peceto",
                "precio": 600,
                "activo": true,
                "imagen": "images/carne/milanesas/miladepeceto.jpg"
            ),
            '9' => array(
                "id": 9,
                "tipo": "Milanesas",
                "nombre": "Milanesa de nalga",
                "precio": 600,
                "activo": true,
                "imagen": "images/carne/milanesas/milanalga.jpg"
            ),
            '10' => array(
                "id": 10,
                "tipo": "Gourmet",
                "nombre": "Colita de cuadril",
                "precio": 600,
                "activo": true,
                "imagen": "images/carne/gourmet/colitadecuadril.jpg"
            ),
            '11' => array(
                "id": 11,
                "tipo": "Gourmet",
                "nombre": "Lomo",
                "precio": 600,
                "activo": true,
                "imagen": "images/carne/gourmet/lomoconcordon.jpg"
            ),
            '12' => array(
                "id": 12,
    "tipo": "Gourmet",
    "nombre": "Peceto",
    "precio": 600,
    "activo": true,
    "imagen": "images/carne/gourmet/peceto.jpg"
            ),



            '4' => array(
                "id"=> 4,
                "tipo"=> "Parrilla",
                "nombre"=> "Vacio",
                "precio"=> 600,
                "activo"=> true,
                "imagen"=> "images/carne/parrilla/vacio.jpg"
            ),



            '4' => array(
                "id"=> 4,
                "tipo"=> "Parrilla",
                "nombre"=> "Vacio",
                "precio"=> 600,
                "activo"=> true,
                "imagen"=> "images/carne/parrilla/vacio.jpg"
            ),



            '4' => array(
                "id"=> 4,
                "tipo"=> "Parrilla",
                "nombre"=> "Vacio",
                "precio"=> 600,
                "activo"=> true,
                "imagen"=> "images/carne/parrilla/vacio.jpg"
            ),







            );
    
          echo json_encode($productos);        
         
         
 ?>