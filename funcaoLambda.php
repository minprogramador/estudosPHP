<?php

// -----------------------------------------------------------------------------
//
// # Funcao lambda.
//
// > É uma função anônima básica.
//	Confira a sintaxe.
//
// -----------------------------------------------------------------------------
//
//```php

$setNome = function($nome) {
	printf("Oi meu nome é: %s\r\n", $nome);	
};

$setNome('Manoel');
// > Resultado: Oi meu nome é: Manoel

//```
//
// ## Exemplo usando "use".
//
//```php

$complemento = 'da silva';

$setNomeComplemento = function($nome) use ($complemento) {
	printf("Oi meu nome é: %s %s\n", $nome, $complemento);
};

$setNomeComplemento('Felix');
// > Resultado: Oi meu nome é: Felix da silva

//```
//
// > "Lambdas são mais rápidas que funçōes criadas utilizando create_function."
