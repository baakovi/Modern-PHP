<?php

   $nome = "Gustavo";
   $sobrenome = "Guanabara";
   
   const PAIS = "Brasil";
   
   // Alteração dos valores das variáveis
   // Variáveis => como seu próprio nome diz, elas variam.
   $nome = "Rafael";
   $sobrenome = "Silva";
   
   // Tentativa de alterar uma constante (como seu nome diz, isso não funciona pois constantes não se alteram)
   // PAIS = "EUA";

   echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . ".";

   // ---------------------------------

   $lastName = "Moraes";
   // Apenas a variável pode ser alterada.
   const CURSO = "TI";

   // ---------------------------------

   // Variáveis de exemplo
	$name = "Pedro";
	
	// Variável não definida por causa do case sensitive, então, essa variável em maiúsculo sendo chamada é outra variável, dando erro.
	// echo "É verdade que seu nome é $NAME ?";
	
	echo "É verdade que seu nome é $name? ";
	
	$salario = 2500.75;
	
	echo "Seu salário é de R$ $salario";
	
	echo "\n";
	
	const _TX = 850;
	
	echo "Resultado = " . _TX;

   // Variáveis em camel case
   $nomeCompletoCliente = "Camel Case";

   // Variáveis em snake case
   $telefone_contato_fornecedor = "Snake Case";

?>