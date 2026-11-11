<?php

require_once __DIR__ . "/../model/Comida.php";

class ComidaService
{
    public function validar(Comida $comida)
    {
        $erros = [];

        if(! $comida->getNome())
        {
            array_push($erros, "Informe o nome!");
        }

        if(! $comida->getIntensidade()->getId())
        {
            array_push($erros, "Informe a intensidade!");
        }
        
        if(! $comida->getTipo()->getId())
        {
            array_push($erros, "Informe o tipo!");
        }

        return $erros;

    }
}