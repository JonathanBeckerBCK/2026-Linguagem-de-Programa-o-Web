<?php

require_once __DIR__ . "/../util/Connection.php";
require_once __DIR__ . "/../model/Tipo.php";


class TipoDAO
{
	public function list()
	{
		$sql = "SELECT * FROM tipos";

		$conn = Connection::getConnection();
		$stm = $conn->prepare($sql);
		$stm->execute();
		$dados = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->map($dados);
	}

	public function map(array $dados)
	{
		$tipos = [];

		foreach ($dados as $d) {
			$tipo = new Tipo();
			$tipo->setId($d['id']);
			$tipo->setNome($d['nome']);

			$tipos[] = $tipo;
		}

		return $tipos;
	}

	public function findById(int $id): ?Tipo
	{
		$sql = "SELECT * FROM tipo WHERE id = ?";

		$conn = Connection::getConnection();
		$stm = $conn->prepare($sql);
		$stm->execute([$id]);

		$dados = $stm->fetchAll(PDO::FETCH_ASSOC);
		$tipos = $this->map($dados);

		if (!empty($tipos)) {
			return $tipos[0];
		}

		return null;
	}

	public function create(Tipo $tipo)
	{
		try {
			$sql = "INSERT INTO tipo (nome) VALUES (:nome)";

			$conn = Connection::getConnection();
			$stm = $conn->prepare($sql);
			$stm->bindValue('nome', $tipo->getNome());
			$stm->execute();

			return "";
		} catch (PDOException $e) {
			$erro = "Erro ao salvar o tipo. Tente novamente.";
			if (defined('AMB_DEV') && AMB_DEV) {
				$erro .= "<br>" . $e->getMessage();
			}
			return $erro;
		}
	}

	public function update(Tipo $tipo)
	{
		try {
			$sql = "UPDATE tipo SET nome = :nome WHERE id = :id";

			$conn = Connection::getConnection();
			$stm = $conn->prepare($sql);
			$stm->bindValue('id', $tipo->getId());
			$stm->bindValue('nome', $tipo->getNome());
			$stm->execute();

			return "";
		} catch (PDOException $e) {
			$erro = "Erro ao atualizar o tipo. Tente novamente.";
			if (defined('AMB_DEV') && AMB_DEV) {
				$erro .= "<br>" . $e->getMessage();
			}
			return $erro;
		}
	}

	public function excluir(int $id)
	{
		try {
			$sql = "DELETE FROM tipo WHERE id = ?";

			$conn = Connection::getConnection();
			$stm = $conn->prepare($sql);
			$stm->execute([$id]);
			return "";
		} catch (PDOException $e) {
			$erro = "Erro ao excluir o tipo. Tente novamente.";
			if (defined('AMB_DEV') && AMB_DEV) {
				$erro .= "<br>" . $e->getMessage();
			}
			return $erro;
		}
	}
}
