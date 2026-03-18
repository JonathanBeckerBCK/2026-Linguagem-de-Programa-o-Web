<?php

require_once("Modelo/Pessoa.php");

$tipo = "";
$_GET["tipo"];

if (isset($_GET["tipo"]))
{

    $tipo = $_GET["tipo"];

    if ($tipo == "A") // ARRAY
    {

        $Pessoa["nome"] = $_GET["nome"];
        $Pessoa["sobrenome"] = $_GET["sobrenome"];
        $Pessoa["idade"] = $_GET["idade"];

        print "Nome completo: " . $Pessoa["nome"] . " " . $Pessoa["sobrenome"];
        print "<br>Idade: " . $Pessoa["idade"] . "\n";
    } 
    else if ($tipo == "C") // CLASSE
    {

        $PessoaC = new Pessoa();
        $PessoaC->setNome($_GET["nome"]);
        $PessoaC->setSobrenome($_GET["sobrenome"]);
        $PessoaC->setIdade($_GET["idade"]);


        print "<span style='font-weight: bold;'>Nome completo: </span>";
        print $PessoaC->getNome() ." ". $PessoaC->getSobrenome() . "<br>";

        print "<span style='font-weight: bold;'>Idade: </span>";
        print $PessoaC->getIdade() . "<br>";
    } 
    else 
    {
        print "Informe um parametro [tipo] com o valor inválido!";
    }

}
