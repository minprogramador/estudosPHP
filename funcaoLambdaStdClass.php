<?php

// -----------------------------------------------------------------------------
//
// # Funcao lambda, com Objetos "StdClass".
//
// > 
// -----------------------------------------------------------------------------
//
//```php


$obj = new StdClass();
$obj->multiplicar = function ($a, $b) {
	return $a * $b;
};

$multiplicar = $obj->multiplicar;

echo $multiplicar(2, 10);
// > Resultado: 20