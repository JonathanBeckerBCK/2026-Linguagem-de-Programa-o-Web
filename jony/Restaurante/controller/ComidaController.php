<?php

require_once(__DIR__ . "/../dao/ComidaDAO.php");
require_once __DIR__ . "/../service/ComidaService.php";

class ComidaController
{

    private ComidaDAO $comidaDAO;
    private ComidaService $comidaService;

    public function __construct() {
        $this->comidaDAO = new ComidaDAO();
        $this->comidaService = new ComidaService();
    }

    public function list() {
        return $this->comidaDAO->list();

    } 

    public function insert($comida)
    {
        //Validar os dados
        $erros = $this->comidaService->validar($comida);

        if(empty($erros)) 
        {
            $erroDAO = $this->comidaDAO->insert($comida);
        
            if($erroDAO)
                array_push($erros, $erroDAO); 
        }
        

        return $erros;
    }
    
    public function buscarPorId($id)
    {
        return $this->comidaDAO->findById($id);
    }
    
    public function alterar($comida)
    {
        $erros = $this->comidaService->validar($comida);   
        
            if (empty($erros))
            {
                $erroDAO = $this->comidaDAO->update($comida);   
                
                    if ($erroDAO)                                         
                    {
                        array_push($erros, $erroDAO);
                    }
            }
            
        return $erros;
    }
    
    public function excluir(int $id)
    {
        $this->comidaDAO->excluir($id);
    }
}