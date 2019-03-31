<?php

// -----------------------------------------------------------------------------
//
// # Variáveis variáveis
//
// > No PHP é possível criar o que chamamos de variáveis variáveis,
//	que nada mais é do que uma variável utilizar o conteúdo de outra variável
//	para formar seu identificador.
//
// -----------------------------------------------------------------------------
//
//
// ### Imprime variaveis variaveis.
// > Resumindo, o resultado se transforma em nome de variavel!

$var  = 'Ola';
$$var = 'Mundo';

echo $var . PHP_EOL;
// > Resultado:	Ola

echo $Ola . PHP_EOL;
// > Resultado:	Mundo

echo $$var . PHP_EOL;
// > Resultado:	Mundo

echo ${'Ola'} . PHP_EOL;
// > Resultado:	Mundo

echo ${$var} . PHP_EOL;
// > Resultado:	Mundo

//
// -----------------------------------------------------------------------------
//
// ### Como podemos observar no exemplo acima:
//
// > Criamos uma variável $var com uma string ‘Ola’,
//	em seguida utilizando o recurso de variáveis variáveis, iniciamos
//	outra variável utilizando duas vezes o símbolo do dólar($$),
//	o que faz o PHP identificar esse recurso,
//	nesse momento o PHP interpreta o valor da variável $var como 
//	sendo o identificador da nova variável.
//
// -----------------------------------------------------------------------------
