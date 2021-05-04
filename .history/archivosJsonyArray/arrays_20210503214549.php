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
<br>
        $productos = array(
            '1' => array(
                'id'=>'1',
                'tipo'=>'1',
                'nombre'=> '',
                'precio'=>'600',
                'Activo'=> FALSE
                ),
            '2' => array(
                "id"=> 2,
                "tipo"=> "Parrilla",
                "nombre"=> "Matambre",
                "precio"=> 600,
                "activo"=> true,
                "imagen" => "images/carne/parrilla/matambre.jpg"
            
                )
            );
    
          echo json_encode($productos);        
         
         
 ?>