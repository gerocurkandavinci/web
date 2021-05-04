<?php
// echo "hola";
// <h1>
// el valor de a es : 
// $a = 11
// if($a > 10 ){

//     echo  'mayor' 
// }else {
//    echo 'menor/igual'
// }
// <h1>esto es igual <?php if ($a > 1)?'mayor':'menor/igual'?></h1>

<!-- // </h1>

switch($a){

    case 1 : echo "<h1>asdas</h1>"
    break;
    case 2 : echo "<h1>asdasda</h1>"
    break;
    case 3 : echo "<h1>asdas</h1>"
    break;
    default: echo "<h1>asdas</h1>"
}; -->
<?php

// echo 'hola'
// // $i = 1 ;
// for(;i<10;){
// if()
//     echo $i =++    
// }

$vector = array();

$vector[]='a';
$vector[4]='b';
$vector[2]='c';
$vector[]='e';
$vector[]='d';

echo '<pre>';var_dump($vector);'</pre>';


foreach($vector as $key=>$value)
{
    // echo $vector[$i];
    echo $key.'=>'.$value.'<br>';
}



$vector1 = array();

$vector1[]='a';
$vector1[4]= FALSE;
$vector1[2]= array(1,2,3);
//$vector1[] = new DateTime();
$vector1[]='d';

echo '<pre>';var_dump($vector1);'</pre>';


foreach($vector1 as $key=>$value)
{
    // echo $vector[$i];
    echo $key.'=>'.$value.'<br>';
}



//$json = json_encode($vector)

//echo '<pre>';var_dump(json_encode($json,true))echo;'</pre>';

// listado de clientes 
// nobre , apellido y telefono 

//for($i=0 ; $i> count($cliente) ; $i++)


$cliente = array();
$cliente [] = array('jose','perez','123456');

echo '<pre>';var_dump($cliente);echo'</pre>';


$clientes = array();
$clientes [] = array('nombre'=>'jose',
                      'apellido'=>'perez',
                        'Telefono' =>'123456');

echo '<pre>';var_dump($clientes);echo'</pre>';

foreach($clientes as $data){
echo'el DNI'.$data['nomnbre'].' '.$data['apellido'].' '.$data['Telefono'].' '.

}


?>