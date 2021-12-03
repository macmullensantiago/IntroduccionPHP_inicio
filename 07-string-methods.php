<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertirlo a mayusculas
echo stroupper($nombreCliente);

// Convertirlo en minisculas
echo strolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan', 'J', $nombreCliente);

// Revisar si el string existe o no
echo strpos($nombreCliente, 'Juan');

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente" . $nombreCliente . "es" . $tipoCliente

echo "El Cliente {$nombreCliente} es ${tipoCliente} ";




include 'includes/footer.php';