<?php

require_once __DIR__ . "/../../controller/ComidaController.php";

$msgErro = "";
$comida = NULL;

$comidaCont = new comidaController();

if (isset($_POST['nome']))
{
    $id = $_POST['id'];
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : NULL ;
    $intensidade = trim($_POST['intensidade']) ? trim($_POST['intensidade']) : null;
    $tipo = trim($_POST['tipo']) ? trim($_POST['tipo']) : null;
    
    $tipoObj = new Tipo();
    $tipoObj->setId($tipo);
    
    $intensidadeObj = new Intensidade();
    $intensidadeObj->setId($intensidade);
    
    $comida = new Comida();
    $comida->setId($id);
    $comida->setNome($nome);
    $comida->setTipo($tipoObj);
    $comida->setIntensidade($intensidadeObj);
    
    $erros = $comidaCont->alterar($comida);
    
    if (empty($erros))
    {
        header("location: listar.php");
    }
    else
    {
        $msgErro = implode("<br>", $erros);
    }    
}
else
{
    $id = 0;
            
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];  
            $comida = $comidaCont->buscarPorId($id);    
        }
}

require_once __DIR__ . "/form.php";
