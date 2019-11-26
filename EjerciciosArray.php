<?php
// <!-- Ejercicio 1.
// Escribe el código necesario para generar la cadena final usando el arreglo dado

// $arreglo = [

// 	'keyStr1' => 'lado',
// 	0 => 'ledo',

// 	'keyStr2' => 'lido',
// 	1 => 'lodo',
// 	2 => 'ludo'

// ]; 
// Lado, ledo, lido, lodo, ludo,
// decirlo al revés lo dudo.
// Ludo, lodo, lido, ledo, lado,
// ¡Qué trabajo me ha costado! -->

$arreglo = [

    'keyStr1' => 'lado',
            0 => 'ledo',

    'keyStr2' => 'lido',
            1 => 'lodo',
            2 => 'ludo'
]; 

$texto = "<p>";

foreach($arreglo as $posicion){
    $texto .= $posicion . ", ";
}

$texto .= "<br> decirlo al revés lo dudo.<br>";

foreach(array_reverse($arreglo) as $posicion){
    $texto .= $posicion . ", ";
}

$texto .= "<br>¡Qué trabajo me ha costado!<br>";

echo $texto;


/**
 * Ejercicio 2.
 * Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo 
 * foreach, para imprimir el nombre del país seguido de las ciudades que definiste:
 * Ejemplo,
 * México: Monterrey Querétaro Guadalajara
 * Colombia: Bogota Cartagena Medellin
 */

 $paises = [
     ['España' => ['Palma', 'Barcelona', 'Madrid']],
     ['Italia' => ['Venecia', 'Milán', 'Roma']],
     ['Francia' => ['Paris', 'Marselle', 'Lyon']],
     ['Reino Unido' => ['Londres', 'Waterloo', 'York']],
     ['Alemania' => ['Babiera', 'Dasseldorf', 'Berlin']],
 ];


 foreach($paises as $pais){

    foreach($pais as $ciudades){
        echo "<p>".array_keys($pais)[0].": ".join(", ", $ciudades)."</p>";
    }
 }


//  Ejercicio 3.
// Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

$texto = "<p> Mínimos: ";
sort($valores);

for($index = 0; $index < 3; $index++){
    $texto .= $valores[$index] . ", ";
};

$texto .= "<br>Máximos: ";
rsort($valores);

for($index = 2; $index >= 0; $index--){
    $texto .= $valores[$index] . ", ";
};

echo $texto;

?>