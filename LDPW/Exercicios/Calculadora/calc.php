<?php

//pq dai seria mais no thunder

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if (isset($_GET['num1']) && isset($_GET['num2']))
{
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2;
    $resto = $num1 % $num2;

    print "Soma:".$soma;
    print "<br>Subtração:".$subtracao;
    print "<br>Multiplicação:".$multiplicacao;
    print "<br>Divisão:".$divisao;
    print "<br>Resto:".$resto;

}