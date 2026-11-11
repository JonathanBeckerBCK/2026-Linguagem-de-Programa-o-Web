<?php

require_once __DIR__ . "/../util/Connection.php";
require_once __DIR__ . "/../model/Comida.php";
require_once __DIR__ . "/../model/Tipo.php";
require_once __DIR__ . "/../model/Intensidade.php";


class ComidaDAO
{
    public function insert(Comida $comida)
    {
        try
        {
            $sql = "INSERT INTO comidas (nome, id_tipo, id_intensidade) VALUES (:nome, :id_tipo, :id_intensidade)";

            $conn = Connection::getConnection();
            $stm  = $conn -> prepare($sql);
            $stm -> bindValue("nome", $comida->getNome());
            $stm -> bindValue("id_tipo", $comida->getTipo()->getId());
            $stm -> bindValue("id_intensidade", $comida->getIntensidade()->getId());
            $stm ->execute();
        }
        catch (PDOException $e) 
        {
            $erro = "Erro ao salvar o aluno. Tente novamente.";
                if(AMB_DEV)
                    $erro .= "<br>" . $e->getMessage();  
                return $erro;
        }
    }

    public function list()
    {
        
        $sql = "SELECT c.id, c.nome AS nome_comida, 
                       c.id_tipo, t.nome AS nome_tipo, 
                       c.id_intensidade, i.nome AS nome_intensidade 
                FROM comidas c 
                JOIN tipos t ON (t.id = c.id_tipo) 
                JOIN intensidades i ON (i.id = c.id_intensidade)";
        
        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute();
        
        $dados = $stm->fetchAll(PDO::FETCH_ASSOC); 
        return $this->map($dados);
    }

    public function map(array $dados)
    {
        $comidas = [];

        foreach ($dados as $d)
        {
            $tipo = new Tipo();
            $tipo->setId($d['id_tipo']);
            $tipo->setNome($d['nome_tipo']);

            $intensidade = new Intensidade();
            $intensidade->setId($d['id_intensidade']);
            $intensidade->setNome($d['nome_intensidade']); 

            $comida = new Comida();
            $comida->setId($d['id']);
            $comida->setNome($d['nome_comida']);         
            $comida->setTipo($tipo);
            $comida->setIntensidade($intensidade);

            $comidas[] = $comida;
        }

        return $comidas;
    }

    public function findById(int $id): ?Comida
    {
        $sql = "SELECT c.id, c.nome AS nome_comida, 
                       c.id_tipo, t.nome AS nome_tipo, 
                       c.id_intensidade, i.nome AS nome_intensidade 
                FROM comidas c 
                JOIN tipos t ON (t.id = c.id_tipo) 
                JOIN intensidades i ON (i.id = c.id_intensidade)
                WHERE (c.id = ?)";
        
        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute([$id]);
        
        $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
        $comidas = $this->map($dados); 

            if (!empty($comidas)) {
                return $comidas[0];
            } 
            
        return null;
    }

    public function update(Comida $comida) 
    {
        try
        {
            $sql = "UPDATE comidas 
                    SET nome = :nome, id_tipo = :id_tipo, id_intensidade = :id_intensidade
                    WHERE id = :id";

            $conn = Connection::getConnection();
            $stm = $conn->prepare($sql);
            
            $stm->bindValue("id", $comida->getId());
            $stm->bindValue("nome", $comida->getNome()); 
            $stm->bindValue("id_tipo", $comida->getTipo()->getId());
            $stm->bindValue("id_intensidade", $comida->getIntensidade()->getId());

            $stm->execute();
            return "";
        }
        catch(PDOException $e)
        {
            $erro = "Erro ao salvar a comida. Tente novamente.";
        
                if(defined('AMB_DEV') && AMB_DEV) {
                    $erro .= "<br>" . $e->getMessage();  
                }
                
            return $erro;
        }
    }

    public function excluir(int $id) 
    {
        try 
        {
            $sql = "DELETE FROM comidas WHERE id = ?";

            $conn = Connection::getConnection();
            $stm = $conn->prepare($sql);
            $stm->execute([$id]);
            return "";
        } 
        catch(PDOException $e) 
        {
            $erro = "Erro ao excluir a comida. Tente novamente.";
            
                if(defined('AMB_DEV') && AMB_DEV) {
                    $erro .= "<br>" . $e->getMessage();  
                }
                return $erro;
        }
    }
}
