<?php

require_once __DIR__ . "/../dao/IntensidadeDAO.php";

class IntensidadeController 
{
    public function list()
    {
        $tipo = new IntensidadeDAO();
        return $tipo->list();
    }
}