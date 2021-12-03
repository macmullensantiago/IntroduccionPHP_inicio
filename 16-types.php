<?php 
declare(stric_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) :void {
    if($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;


include 'includes/footer.php';