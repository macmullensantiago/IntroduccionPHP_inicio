<?php include 'includes/header.php';

// While

$i = 0; // Inicializador - primero revisa la condicion y despues ejecuta el codigo
while($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento

// Do While - primero ejecuta el codigo y despues revisa la condicion
$i = 100;

do {
    echo $i. "<br>";

    $i++;
} while ($i < 10);



/** 
 * 3 imprimimr Fizz
 * 5 imprimir BUzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

// For Loop. - primero revisa la condicion y despues ejecuta el codigo

for($i = 1; $i < 1000; $i++ ) {
    if($i % 15 === 0 && $i % 5 ===0) {
        echo $i . " - FIZZ BUZZ <br/>";
    } else if($i % 3 === 0) {
        echo $i . " - Fizz </br>";
    } else if($i 5 === 0) {
        echo $i . " - Buzz </br>";
    } else {
        echo $i . "</br>";
    }
}


include 'includes/footer.php';