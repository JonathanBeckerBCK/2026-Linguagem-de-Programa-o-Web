<?php

class IntensidadeDAO
{
    public function list()
    {
        $sql = "SELECT * FROM intensidades";

        $conn = Connection::getConnection();
        $stm = $conn->prepare($sql);
        $stm->execute();
        $dados = $stm->fetchAll();
        return $this->map($dados);
    }

    public function map(array $dados)
    {
        $intensidades = [];

            foreach($dados as $d) {
                $intensidade = new Intensidade();
                $intensidade->setId($d['id']);
                $intensidade->setNome($d['nome']);

                array_push($intensidades, $intensidade);
            }

        return $intensidades;
    }

}