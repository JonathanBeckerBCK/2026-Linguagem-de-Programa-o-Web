<?php
//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Teste da conexão com o banco de dados
//require_once(__DIR__ . "/../../util/Connection.php");
//$conn = Connection::getConnection();
//print_r($conn);

require_once(__DIR__ . "/../../controller/ComidaController.php");
require_once __DIR__ . "/../../model/Comida.php";

//Buscar os alunos -> origem: base de dados
$comidaCont = new ComidaController();
$comidas = $comidaCont->list();
//print_r($comidas);

//Inclui o cabeçalho da página
require_once(__DIR__ . "/../include/header.php");

//require_once(__DIR__ . "/../include/menu.php");
?>

<table border="3">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Tipo</th>
      <th>Intensidade</th>
      <th></th>
      <th></th>
    </tr>
    <?php foreach ($comidas as $comida):?>
        <tr>
            <td><?= $comida->getId() ?></td>
            <td><?= $comida->getNome() ?></td>
            <td><?= $comida->getTipo()->getNome() ?></td>
            <td><?= $comida->getIntensidade()->getNome() ?></td>
            <td>
                <a href="alterar.php?id=<?= $comida->getId() ?>">
                    <img src="../../img/btn_editar.png" alt="" >
                </a>
            </td>
            <td>
                <a href="excluir.php?id=<?= $comida->getId() ?>" onclick="return confirm('Tem certeza?');">
                    <img src="../../img/btn_excluir.png" alt="" >
                </a>
            </td>
        </tr>    
    <?php endforeach; ?>
</table>

<a href="inserir.php">Inserir</a>



<?php
//Inclui o rodapé da página
require_once(__DIR__ . "/../include/footer.php");
?>