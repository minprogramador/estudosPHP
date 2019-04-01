<?php

// -----------------------------------------------------------------------------
//
// # Funcao closure.
//
// > Função anonima "mais complexas", que a lambda.
//	Permite interaçōes com variáveis externas,
//	ou seja, variáveis que foram definidas no mesmo escopo
//	em que a closure foi criada.
// 	Para isso basta utilizar a palavra "use", informando
//	as variáveis externas que iremos interagir.
//	Confira a sintaxe.
//
// -----------------------------------------------------------------------------
//
// ### Unir dois arrays com closure.
// > Observe o codigo abaixo:
//
//```php

$config['config']['msg'] = 'e ai sou a msg do array config.';

$closure = function ($str) use ($config) {
	$strn = array_merge($str, $config);
	return $strn;
};

$resClosure =  $closure(['closure' => ['msg' => 'array do closure']]);

print_r($resClosure);

//```
//
// > Resultado: 
//
//```php
// Array
// (
//     [closure] => Array
//         (
//             [msg] => array do closure
//         )
//     [config] => Array
//         (
//             [msg] => e ai sou a msg do array config.
//         )
// )
//```