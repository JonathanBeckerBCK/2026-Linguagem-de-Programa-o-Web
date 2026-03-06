<?php

require_once('Modelo/Link.php');

//Função

function DesenhaBotao(array $Botao, string $nomeBotao)
{
    print '<div class="dropdown">';

    print '<button class="dropbtn">'. $nomeBotao .'</button>';

    print '<div class="dropText">';
    
    foreach ($Botao as $T) {
        //                    
        print '<span><img src="' . $T->getLinkImg() . '" width="20" height="20">' . $T->getInfo() . '</span>';    
    }

    print '</div>';
    
    print "<div class='espaco'></div>"; //quando der zoom com a lupa do chrome, ele fica arrumado até 150%
    
    print '</div>';
}

//Código principal
print '<link rel="stylesheet" href="styleBotao.css">';

$imagemGremio = 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/960px-Gremio_logo.svg.png';
$imagemInternacional = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Escudo_do_Sport_Club_Internacional.svg/960px-Escudo_do_Sport_Club_Internacional.svg.png';
$imagemChapecoense = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Logo_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.svg/1280px-Logo_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.svg.png';

$Gremio = new Link();
$Gremio->setLinkImg($imagemGremio);
$Gremio->setInfo('Gremio');

$Internacional = new Link();
$Internacional->setLinkImg($imagemInternacional);
$Internacional->setInfo('Internacional');

$Chapecoense = new Link();
$Chapecoense->setLinkImg($imagemChapecoense);
$Chapecoense->setInfo('Chapecoense');

$Times = array($Gremio, $Internacional, $Chapecoense);

DesenhaBotao($Times, "Times de futebol");

// Botao 2

$imagemLeao = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCOBz3n_B-Q5IKWRcIcT6xjuSqtgx9AXt2JA&s";
$ImagemElefante = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/African_Bush_Elephant.jpg/250px-African_Bush_Elephant.jpg";
$ImagemJaguatirica = "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/081_Ocelot_in_Encontro_das_%C3%81guas_State_Park_Photo_by_Giles_Laurent.jpg/330px-081_Ocelot_in_Encontro_das_%C3%81guas_State_Park_Photo_by_Giles_Laurent.jpg";

$Leao = new Link;
$Leao->setLinkImg($imagemLeao);
$Leao->setInfo("Leão");

$Elefante = new Link;
$Elefante->setLinkImg($ImagemElefante);
$Elefante->setInfo("Elefante");

$Jaguatirica = new Link;
$Jaguatirica->setLinkImg($ImagemJaguatirica);
$Jaguatirica->setInfo("Jaguatirica");

$Animais = array($Leao, $Elefante, $Jaguatirica);

DesenhaBotao($Animais, "Animais");

// botao 3

$imagemViolino = "https://d5gag3xtge2og.cloudfront.net/producao/35078209/G/violino-rolim-mogno-brilhante.webp";
$imagemViolao = "https://izzomusical.vtexassets.com/arquivos/ids/160651/Winner_12630_Violao_39_pol_estudante_AW20_nylon_natural_1.jpg?v=637644650304370000";
$imagemBateria = "https://m.media-amazon.com/images/I/61K7uWNg2+L.jpg";

$Violino = new Link;
$Violino->setLinkImg($imagemViolino);
$Violino->setInfo("Violino");

$Violao = new Link;
$Violao->setLinkImg($imagemViolao);
$Violao->setInfo("Violão");

$Bateria = new Link;
$Bateria->setLinkImg($imagemBateria);
$Bateria->setInfo("Bateria");

$instrumentos = array($Violino, $Violao, $Bateria);

DesenhaBotao($instrumentos, "Instrumentos");

$imagemShihTzu = "https://portaledicase.com/wp-content/uploads/2024/07/Shih-tzu-1024x683.jpg";
$imagemBulldogFrances = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRhq8xGfRi16V9PWVm8GRWNZJa8OHnm5h4eQ&s";
$imagemYorkshireTerrier = "https://www.silvernickelpuppies.com/wp-content/uploads/2025/06/IMG_5840-600x600.jpg";

$ShihTzu = new Link;
$ShihTzu->setLinkImg($imagemShihTzu);
$ShihTzu->setInfo("Shih Tzu");

$BulldogFrances = new Link;
$BulldogFrances->setLinkImg($imagemBulldogFrances);
$BulldogFrances->setInfo("Bulldog Frances");

$YorkshireTerrier = new Link;
$YorkshireTerrier->setLinkImg($imagemYorkshireTerrier);
$YorkshireTerrier->setInfo("Yorkshire Terrier");

$TiposCachorros = array($ShihTzu, $BulldogFrances, $YorkshireTerrier);

DesenhaBotao($TiposCachorros, "Tipos Cachorros"); 