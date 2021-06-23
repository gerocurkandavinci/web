<?php

$marcas = array(
    '1' =>  array(
            'id' => 1,
            'nombre' => 'First',
            'activa' => FALSE
        ),
    '2' =>  array(
        'id' => 2,
        'nombre' => 'Res',
        'activa' => TRUE
        )
    );

echo json_encode($marcas);
?>