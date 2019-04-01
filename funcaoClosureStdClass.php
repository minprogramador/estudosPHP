<?php

// -----------------------------------------------------------------------------
//
// # Funcao closure, com Objetos "StdClass".
//
// > 
// -----------------------------------------------------------------------------
//
//```php


$obj = new StdClass();
$obj->numero = 10;
$obj->multiplicar = function ($a) use($obj) {
	return $a * $obj->numero;
};

$multiplicar = $obj->multiplicar;
echo $multiplicar(2);

// > Resultado: 20