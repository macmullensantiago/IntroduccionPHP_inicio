<?php include 'includes/header.php';

$cliente =  [];
$clientes = array();
$clientes3 = array('Pedro', 'Juan', 'Luis');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - Revisa si un arreglo está vacio
var_dump( empty($clientes) );
var_dump( empty($clientes3) );
var_dump( empty($clientes2) );


// Isset - Revisar si un arreglo está creado o si una propiedad está definida
echo "<br>";
var_dump( isset($clientes4) );
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

// Isset - permite revisar si una propiedad o un arreglo asociativo existe
var_dump( isset($cliente['nombre']) );
var_dump( isset($cliente['codigo']) );



include 'includes/footer.php';