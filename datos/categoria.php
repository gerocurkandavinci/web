<?php
    $categorias = array(
        '1' => array(
            'id'=>'1',
            'nombre'=> 'Parrilla',
            'activa'=> True
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
            'activa' => True
            ),  
        '5' => array(
            'id'=>'4',
            'nombre'=> 'Achuras',
             'activa' => True
            ),  
        );
echo json_encode($categorias);

?>