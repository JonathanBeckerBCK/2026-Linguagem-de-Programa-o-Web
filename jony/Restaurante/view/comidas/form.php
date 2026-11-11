<?php

require_once __DIR__ . "/../../model/Comida.php";
require_once __DIR__ . "/../../controller/TipoController.php";
require_once __DIR__ . "/../../controller/IntensidadeController.php";

//Listar do tipo e da intensidade

$tipoController = new TipoController();
$tipos = $tipoController->list();

//print_r($tipos);

$intensidadesController = new IntensidadeController();
$intensidades = $intensidadesController->list();


//Inclui o cabeçalho da página
require_once(__DIR__ . "/../include/header.php");
?>




<h2>Formulário de Comidas</h2>

<form action="" method="POST">
    
    <div>
        <label for="">Nome:</label>
        <input type="text" name="nome" placeholder="Informe nome" value="<?= $comida ? $comida->getNome() : '' ?>">
    </div>

     <div>
        <label for="">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="">----Selecione----</option> 
            <?php foreach ($tipos as $t) :?>
            
                <option value="<?= $t->getId() ?>"
                    <?php if($comida && $comida->getTipo()->getId() == $t->getId())
                        echo "selected";                    
                    ?>
                ><?= $t->getNome() ?></option>
                
            <?php endforeach; ?>
            
        </select>
    </div>
    
    <div>
        <label for="">Intensidade:</label>
        <select name="intensidade" id="intensidade">
                <option value="">----Selecione----</option>
                <?php foreach ($intensidades as $i) :?>
                
                    <option value="<?= $i->getId()?>"
                        
                        <?php if ($comida && $comida->getIntensidade()->getId() == $i->getId() ):?>
                            selected
                        <?php endif; ?>
                            
                    ><?= $i->getNome() ?></option>
                    
                <?php endforeach; ?>
        </select>
    </div>
    
    <input type="hidden" name="id" value="<?= $comida ? $comida->getId() : 0 ?>">


    <input type="submit" value="Gravar"></input>


</form>

<div>
    <?= $msgErro ?>
</div>









<?php
//Inclui o cabeçalho da página
require_once(__DIR__ . "/../include/footer.php");
?>