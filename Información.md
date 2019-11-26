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