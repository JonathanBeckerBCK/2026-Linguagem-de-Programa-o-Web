<?php

require_once __DIR__ . "/../dao/TipoDAO.php";

class TipoController 
{
    public function list()
    {
        $tipo = new TipoDAO();
        return $tipo->list();
    }
}