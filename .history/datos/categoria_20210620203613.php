<?php
    $categorias = array(
        '1' => array(
            'id'=>'1',
            'nombre'=> 'Parrilla',
            'Activo'=> True
            ),
        '2' => array(
            'id'=>'2',
            'nombre'=> 'Milanesas',
             'Activo' => True
            ),
        '3' => array(
            'id'=>'3',
            'nombre'=> 'Gourmet',
             'Activo' => True
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

?>