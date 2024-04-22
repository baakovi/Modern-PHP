<?php
// Aula: É possível treinar PHP no smartphone.
// Site: https://onlinephp.io/


// Enter your code here, enjoy!
$nome = "Gustavo";
$idade = 45;
echo "Olá $nome! Você tem $idade anos.";
echo "\n";

$v = phpversion();
print "Você está rodando a versão $v do PHP \u{1faf6}";

$teste = $_GET["x"] ?? "\nFunciona, operador de equalecência (apenas para versão PHP 7 para cima)";

echo $teste;

