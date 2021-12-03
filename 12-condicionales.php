<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if($autenticado || $adminadmin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}

// If anidados...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
        ]
    ];

echo "<br>";

if( !empty($cliente) ) {
    echo "El arerglo de cliente esta vacio";

    if($cliente['saldo'] > 0) {
        echo "El saldo del cliente esta disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";

// else if
if ($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es Premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es Premium";
}

// Switch

$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        case 'Emmm...';
        break;
    default:
        echo "Algún lenguaje que no se cual es";
        break;
}





include 'includes/footer.php';