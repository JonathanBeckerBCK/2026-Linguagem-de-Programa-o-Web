<?php

require_once('Modelo/Link.php');

$imagemGremio = 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/960px-Gremio_logo.svg.png';
$imagemInternacional = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Escudo_do_Sport_Club_Internacional.svg/960px-Escudo_do_Sport_Club_Internacional.svg.png';
$imagemChapecoense = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Logo_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.svg/1280px-Logo_Associa%C3%A7%C3%A3o_Chapecoense_de_Futebol.svg.png';

$Gremio = new Link();
$Gremio->getLinkImg($imagemGremio);
$Gremio->getInfo('Gremio');

$Internacional = new Link();
$Internacional->getLinkImg($imagemInternacional);
$Internacional->getInfo('Internacional');

$Chapecoense = new Link();
$Chapecoense->getLinkImg($imagemChapecoense);
$Chapecoense->getInfo('Chapecoense');

$Times = array($Gremio, $Internacional, $Chapecoense);

print '<link rel="stylesheet" href="styleBotao.css">';

print '<div class="dropdown">';

print '<button class="dropbtn">Times de Futebol</button>';

print '<div class="dropText">';

foreach ($Times as $T) {
//                     array link                array nome
    print '<span><img src='.  .' width="20" height="20">    </span>';

}

print '</div>';

print '</div>';