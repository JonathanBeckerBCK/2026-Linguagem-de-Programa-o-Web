<?php

require_once __DIR__ . "/../../controller/ComidaController.php";

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    
    $comidaCont = new comidaController();
    $excluir = $comidaCont->excluir($id);
    
        if (! $excluir)
        {
            header("location: listar.php");
        }
        else
        {
            echo $excluir;
            echo "<br><a href='listar.php'>Voltar</a>";
        }
}
else
{
    echo "ID da comida não informado!";
    echo "<br><a href='listar.php'>Voltar</a>";
}