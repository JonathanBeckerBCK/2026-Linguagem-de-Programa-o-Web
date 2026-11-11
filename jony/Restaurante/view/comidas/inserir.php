<?php

require_once __DIR__ . "/../../model/Comida.php";
require_once __DIR__ . "/../../model/Intensidade.php";
require_once __DIR__ . "/../../model/Tipo.php";
require_once __DIR__ . "/../../controller/ComidaController.php";

$msgErro = "";
$comida = null;

//     private ?int $id;
//     private ?string $nome;
//     private ?Intensidade $intensidade;
//     private ?Tipo $tipo;

if (isset($_POST['nome']))
{
    //1- Capturar os dados preenchidos no formulário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $intensidade = trim($_POST['intensidade']) ? trim($_POST['intensidade']) : null;
    $tipo = trim($_POST['tipo']) ? trim($_POST['tipo']) : null;

    $intensidadeObj = new Intensidade();
    $intensidadeObj -> setId($intensidade);
    
    
    $tipoObj = new Tipo();
    $tipoObj -> setId($tipo);

    $comida = new Comida();
    $comida -> setId(0);
    $comida -> setNome($nome);
    $comida -> setIntensidade($intensidadeObj);
    $comida -> setTipo($tipoObj);
    
    $comidaCont = new ComidaController();
    $erros = $comidaCont->insert($comida);

    if(empty($erros)) 
        header("location: listar.php");
    else
        $msgErro = implode("<br>", $erros);

}

//Adicionar o formulário
include_once(__DIR__ . "/form.php");
?>

