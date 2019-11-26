# ¿QUé es PHP?
PHP es un lenguaje de programación de propósito general de alto nivel que fue diseñado especialmente para el desarrollo de aplicaciones web. Tiene ciertas característica que 
siempre se ha desarrollado hacia mejorar la experiencia de los desarrolladores.

Es un lenguaje interpretado, recibe el código y necesitamos instalar el interprete para poder ejecutarlo, cuando existe la llamada a laweb es cuando se activa el proceso para 
la ejecución de nuestro script.

**¿Qué NO es PHP?**

> ``No es un lenguaje compilado``, por lo cual siempre tendrás que llevar juntos tu código y tu interprete.
> No esta diseñado para realizar aplicaciones de escritorio.
Para trabajar con PHP instalaremos un entorno de desarrollo llamado XAMPP, no es un entorno pensado para producción.

# Sintaxis de PHP
Hagamos el ejemplo más sencillo para trabajar con PHP. Siempre que usemos PHP usaremos lo siguiente: ``<?php ?>`` todo lo que pongamos dentro de esto será lo que el servidor va a interpretar como código php, lo que esté fuera lo ignorará.

Para acceder a él lo haremos ``localhost:8080/hello.php ``porque el servidor abre por defecto el archivo index y nuestro nuevo archivo se llama **hello.php**.

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por **.php** porque nuestro servidor esta configurado a solo interpretar archivos PHP. Solo las partes dentro de ``<?php ?>`` van a ser interpretadas y su código fuente no será visible desde el navegador.

# Variables tipos de datos y cadenas
Una variable puede ser una pequeña cajita en la que puedes almacenar un valor y este lo pueden usar para realizar alguna operación.

> Para declararla usaremos el símbolo de ``$`` y en seguida el nombre, este puede ser ``un _ o una letra``.

PHP no es estáticamente tipado, es decir que no tenemos que decirle qué tipo de dato es esa variable. Además, es débilmente tipado porque podemos fácilmente cambiar el tipo de dato, es decir PHP ejecuta una conversión de datos interna.

Al momento de trabajar con PHP una cosa muy importante es hacer ``debugging`` a nuestras variables, para ello utilizamos ``la función var_dump()``; pasándole por parámetro la variable a revisar.

En PHP tenemos dos tipos de cadenas, las que son con comillas simples y las de comillas dobles. La diferencia entre estas dos cadenas es que la de comillas *simples* recibe de forma **literal** lo que le escribas mientras que la de comillas *dobles* intenta **interpretar cualquier variable** dentro de ella.

# Tipos de Datos en PHP

### Tipos escalares:

+ **boolean**:  true (verdadero) false (falso)
~~~
<?php
$a = true; 
$b = false; 
?>
~~~ 

+ **Integer**: Representa un número entero positivo, negativo o 0.
~~~
<?php
$a = -123;
$b = 0;
$c = 7763;
?>
~~~

+ **Float o double**: Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras.
~~~
<?php
$a = 12.24; 
$b = 1.5e3; 
$c = 7E-10;
?> 
~~~

+ **String**: 
> Representa una cadena de caracteres.
> Existen 4 formas de representar una cadena. Las 2 principales son usando comillas simples o comillas dobles.
>---- Usando comillas simples donde el texto será exactamente como se escribe.
>---- Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las
~~~
<?php
$a = ”Hola”; 
$b = ‘Mundo’; 
?>
~~~

### Tipos Compuestos

+ **Array**: Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array
~~~
<?php
$array = array(
    "curso1" => "php",
    "curso2" => "js",
);

// a partir de PHP 5.4
$array = [
    "curso1" => "php",
    "curso2" => "js",
];

// índices numéricos
$array = [
    "php",
    "js",
];
?>
~~~

+ **Object**: Representa una instancia de una clase. Programación Orientada a Objetos.
~~~
<?php
class Car
{
    function move()
    {
        echo "Going forward..."; 
    }
}

$myCar = new Car();
$myCar->move();
?>
~~~

+ **Callable**: Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método.
~~~
<?php
// Variable que guarda un callable
$firstOfArray = function(array $array) {
    if (count($array) == 0) { return null; }
    return $array[0];
};

// Este es nuestro arreglo
$values = [3, 2, 1];

// Usamos nuestro callable y se imprime el valor 3
echo $firstOfArray($values);
?>
~~~

+ **Iterable**: A partir de PHP 7.1 iterable es un pseudo tipo de datos que puede ser recorrido.
~~~
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $valor) {
        // ...
    } 
}

?>
~~~

### Tipos especiales:
+ **Resource**:Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.
~~~
<?php
$res = fopen("c:\\dir\\file.txt", "r");
?>
~~~

+ **Null**:Es un valor especial que se usa para representar una variable sin valor.
~~~
<?php
$a = null; 
?>
~~~

# Array

Estas variables que almacenan más de un dato se conocen como arreglos y su sintaxis se va a indicar con [ ] (corchetes).

PHP utiliza índices para localizar a los elementos dentro de la variable.

La estructura de arreglos en PHP es conocida como mapa, lo que quiere decir que tiene una composición de llave valor. Además, un arreglo puede contener más arreglos y cada uno de ellos seguirá la misma estructura.

Algo que debes saber es que en PHP podrás almacenar diferentes tipos de datos en un mismo arreglo.

~~~
ARRAY => cadena de valores seleccionados por un índice
$numeros = [
    'uno',
    'dos',
    'tres'
];

acceder a la segunda posición $numero[1] => Método cotidiano de array

ARRAY como mapa => cadena de clave-valor
$paises = [
    [
        'pais' => 'España'
    ], 
    [
        'pais' => 'Polonia'
    ],
    [
        'pais' => 'Francia'
    ]
];

Acceder a los elementos => $paises[0]['pais']
~~~

# Condicionales y Ciclos
Las condiciones nos permiten tomar decisiones en el código, si se cumple la condición entonces se ejecutarán ciertas instrucciones sino se cumple se ejecutarán otras. Estas se denotan por la instrucción ``if else``.

Los ciclos funcionan de la mano con las condiciones, en este caso si se cumple la instrucción se estará ejecutando repetidas veces una instrucción dada.

Hemos agregado los jobs de forma manual accediendo al arreglo a través de sus índices, hacer esto podría traer errores y no podríamos controlarlo si tuviéramos muchos jobs. Ahora veamos una mejor forma de hacerlo con ciclos.

El primero que tenemos es ``do while`` que va a involucrar la *inicialización de variables y condiciones.*
El segundo que veremos es ``for`` que es una forma más *simplificada de usar todos los elementos* que componen los ciclos.

~~~
Condicionales
$var1 = 5
if ($var1 > 2) {
    echo 'es mayor que 2';
} => Cumple!

$var1 = 5
if ($var1 > 2) {
    echo 'es mayor que 2';
} else {
    echo 'es menor que 2';
} => if else

Ciclos
for => 
 <?php
    for($idx = 0;$idx < count($jobs); $idx++) {
        $description = isset($jobs[$idx]['description']) ? $jobs[$idx]['description'] : 'no hay descripción para este trabajo'; => condicional ternario
        echo '<li class="work-position">'.
        '<h5>'.$jobs[$idx]['title'].'</h5>'.
        '<p>'.$description.'</p>'.
        '<strong>Achievements:</strong>'.
        '<ul>'.
        '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
        '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
        '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
        '</ul>'.
        '</li>';
    }
?>

do ... while() =>
 <?php
    $idx = 0;
   do {
        $description = isset($jobs[$idx]['description']) ? $jobs[$idx]['description'] : 'no hay descripción para este trabajo';
        echo '<li class="work-position">'.
        '<h5>'.$jobs[$idx]['title'].'</h5>'.
        '<p>'.$description.'</p>'.
        '<strong>Achievements:</strong>'.
        '<ul>'.
        '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
        '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
        '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>'.
        '</ul>'.
        '</li>';
        $idx++;
    }while( $idx < count($jobs))
?>
~~~

# Ciclos

### while vs. do… while
En la clase anterior hablamos del ciclo do while, aquí lo compararemos con otro ciclo llamado while, recapitulemos el funcionamiento de do… while:

Cuando creamos un ciclo ``do… while``, le decimos a PHP que ejecute cierto bloque de código siempre y cuando la condición que tengas dentro se siga evaluando como verdadera.

Esta es la sintaxis de un ciclo ``do… while``
~~~
do {
   codigo…
} while (condicion)
~~~

El ciclo ``while`` funciona de la misma manera, pero la diferencia principal es que la **evaluación** se llevará a cabo al **iniciar el ciclo**:
~~~
while (condicion) {
   codigo...
}
~~~
La principal diferencia es que el *ciclo do while garantiza que el código interno se ejecutará al menos 1 vez*, mientras que en el ciclo *while si la condición es falsa desde un inicio*, es posible que el ciclo **nunca se ejecute**

### foreach
El ciclo foreach nos brinda una solución simple para iterar sobre los valores de un arreglo, la sintaxis es la siguiente:

~~~
foreach ($array as $valor) {
    sentencias que pueden usar $valor
}
~~~
En esta sintaxis nos encontramos con 4 partes:

La palabra reservada ``foreach`` simplemente indica el inicio de nuestro bloque
Dentro de paréntesis se escribe el nombre del arreglo que vamos a estar iterando, este arreglo debe estar definido previamente, en este ejemplo es ``$arreglo``
La palabra ``“as”`` seguido de un nombre de variable que usaremos para acceder al elemento del arreglo que estamos accediendo, esta variable no debe existir previamente y solo la podrán usar dentro de este bloque. En el ejemplo es ``$valor``.
Entre llaves ``“{ }”`` todas las acciones que queremos repetir, en el momento en que se ejecute el ciclo la variable que definimos para iterar (en el ejemplo $valor) ya existe y podrá ser usada en esta sección, *piensa que el valor de esta variable estará cambiando en cada iteración.*
Suponiendo que en el ejemplo anterior ``$array = [‘uno’, ‘dos’, ‘tres’]``, el ciclo se repetirá **3 veces** y en cada iteración la **variable $valor contendrá el elemento del arreglo correspondiente**, es decir, en la primera iteración $valor será igual a ‘uno’, en la segunda $valor será igual a ‘dos’ y en la tercera $valor será igual a ‘tres’.

Existe una sintaxis alternativa que nos permite no solo conocer el valor, también nos permitirá conocer la llave, de este modo tendremos acceso tanto a la llave como al valor del elemento del arreglo:
~~~
foreach ($array as $llave => $valor) {
    sentencias que pueden usar $llave y $valor
}
~~~

# Operadores
Antes de continuar hablando de operadores es importante mencionar que existe un concepto conocido como precedencia de operadores el cual nos permitirá saber en qué orden se deben ejecutar los operadores que se encuentren en una sola sentencia.

Por ejemplo, en la sentencia:

1 + 2 * 3

Se ejecutará primero la operación 2 * 3
Luego se ejecutará la suma con 1

Esto es debido a que * tiene más valor en la precedencia que el +.

Una forma sencilla de controlar la precedencia es utilizando () paréntesis, de esta forma podemos forzar el orden que nosotros queramos, por ejemplo (1 + 2) * 3 será una versión diferente y se ejecutará primero la suma y luego la multiplicación.

### Operadores aritméticos
Funcionan para realizar operaciones aritméticas.

![Screenshot](https://static.platzi.com/media/user_upload/Captura%20de%20pantalla%202018-08-20%20a%20la%28s%29%2017.35.21-872c31b6-4072-4085-9c20-d978a06503d9.jpg)


### Operadores de asignación
El operador principal de asignación es el símbolo = (igual). Es importante tener en cuenta que este operador no sirve para comparar, normalmente del lado izquierdo del operador tendremos una variable, y este operador sirve para asignar el resultado de lo que se encuentre a la derecha a dicha variable.

$variable = 5;

Lo que tenemos en la derecha puede ser un valor, otra variable, o el resultado de una operación o función.

También existen otros operadores de asignación que se combinan con operadores aritméticos o para strings y nos permiten simplificar algunas sentencias dentro de PHP. Estos son ejemplos de cómo funcionan:
~~~
$a += $b
$a = $a + $b

$a -= $b
$a = $a - $b

$a *= $b
$a = $a * $b

$a /= $b
$a = $a / $b

$a %= $b
$a = $a % $b

$a .= $b
$a = $a . $b
~~~


### Operadores de comparación
Nos permiten comparar valores.
![Screenshot](https://static.platzi.com/media/user_upload/Captura%20de%20pantalla%202018-08-20%20a%20la%28s%29%2017.36.45-ca0354fd-2901-4a4a-b59e-d17050d6185d.jpg)

### Operadores de incremento/decremento
Permiten incrementar o decrementar un valor en 1.

![Screenshot](https://static.platzi.com/media/user_upload/Captura%20de%20pantalla%202018-08-20%20a%20la%28s%29%2017.37.33-2c7d266e-3744-4dba-9796-8652482c14ee.jpg)

Es muy importante entender cómo afecta el lugar donde se establece el operador, ejemplo:
~~~
$a = 1;
echo $a++; $a = 1
echo $a;   $a = 2
echo ++$a; $a = 3
echo $a;   $a = 3
~~~


### Operadores lógicos
Nos permiten combinar resultados de comparaciones.
![Screenshot](https://static.platzi.com/media/user_upload/Captura%20de%20pantalla%202018-08-20%20a%20la%28s%29%2017.38.35-4d37f1cd-bea2-497f-bf42-a176cf72f137.jpg)


### Operadores para strings
Existen 2 operadores para strings el . (punto) que nos permite concatenar cadenas, y el .= que ya fue visto anteriormente y nos permite simplificar la sintaxis de concatenar algo a una misma cadena, ejemplo:
~~~
$var1 = ‘Hola ’ . ‘ php’;
$var1 .= ‘!!!’;
echo $var1;  =>  Hola php!!!
~~~


### Operadores para arrays
![Screenshot](https://static.platzi.com/media/user_upload/Captura%20de%20pantalla%202018-08-20%20a%20la%28s%29%2017.39.42-7b55c86d-4d3e-44c1-b44b-3354a363eccf.jpg)