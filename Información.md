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
    * **boolean**: Valores válidos: true (verdadero) false (falso)