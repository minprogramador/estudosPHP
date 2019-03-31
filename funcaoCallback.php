<?php

// -----------------------------------------------------------------------------
//
// # Funcao closure/Callback.
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

$config['config']['msg'] = 'Sou a msg do array config.';

function DivideStr($str, $callback) {
	$parts = explode(' ', $str);

	return $callback(['resCallback' => $parts]);
}
// > Entra "$str" e retorna para "$callback".
 
$res = DivideStr('Ola Mundo', function ($resCallback) use ($config) {
	return array_merge($resCallback, $config);
});

print_r($res);
// Resultado:
// Array
// (
//     [resCallback] => Array
//         (
//             [0] => Ola
//             [1] => Mundo
//         )
//     [config] => Array
//         (
//             [msg] => Sou a msg do array config.
//         )
// )

