<?php

namespace estudosPHP;

// -----------------------------------------------------------------------------
//
// # Constantes mágicas no PHP
//
// > Além das constantes pré-definidas,
//	o PHP oferece algumas constantes falsas,
//	que são denominadas constantes mágicas,
//	eu digo falsa, porque seu valor não será sempre o mesmo,
//	seu valor dependerá de onde ela está sendo utilizada,
//	parece um pouco confuso mas depois de conferir o exemplo abaixo
//	isso ficará um pouco mais claro.
//
// -----------------------------------------------------------------------------
//
//
// ### Constante mágica __LINE__.
// > Retorna a linha atual do script.

echo __LINE__ . PHP_EOL;
// > Resultado: 22

echo __LINE__ . PHP_EOL;
// > Resultado: 25

//
// -----------------------------------------------------------------------------
//
//
// ### Constante mágica __FILE__.
// > Retorna o caminho completo e o nome do arquivo.

echo __FILE__ . PHP_EOL;
// > Resultado: /Users/NAMEUSER/workspace/estudosPHP/constantesMagicas.php

//
// -----------------------------------------------------------------------------
//
//
// ### Constante mágica __DIR__.
// > Retorna o diretorio do arquivo atual.

echo __DIR__ . PHP_EOL;
// > Resultado: /Users/NAMEUSER/workspace/estudosPHP

//
// -----------------------------------------------------------------------------
//
//
// ### Constante mágica __FUNCTION__.
// > Retorna o nome da funcao.

function minhaFuncao() {
	echo __FUNCTION__ . PHP_EOL;
	// > Resultado: minhaFuncao
}

minhaFuncao();

//
// -----------------------------------------------------------------------------
//
//
// ### Constante mágica __CLASS__ e __METHOD__.
// > A constante __CLASS__, retorna o nome da classe.
//	A constante __METHOD__, retorna o nome do methodo/funcao da classe.

class MinhaClasse {
	function __construct() {
		echo __CLASS__ . PHP_EOL;
		// > Resultado: MinhaClasse

		echo __METHOD__ . PHP_EOL;
		// > Resultado: MinhaClasse::__construct
	}
}
$testClass = new MinhaClasse();

//
// -----------------------------------------------------------------------------
//
//
// ### Constante mágica __NAMESPACE__.
// > Retorna o nome do atual namespace!

echo __NAMESPACE__ . PHP_EOL;
// > Resultado: estudosPHP

//
// -----------------------------------------------------------------------------
