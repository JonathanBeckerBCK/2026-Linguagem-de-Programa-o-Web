<?php
require_once("Modelo/Palpite.php");

print "<link rel='stylesheet' href='Style.css'>";
$Palpite = $_GET["Palpite"];

$ImgPikachu = "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/025.png";
$ImgKirlia  = "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/281.png";
$ImgAxew    = "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/610.png";

$Pokemon =
[
    "1" => new Palpite("P i k a c h u", $ImgPikachu),
    "2" => new Palpite("K i r l i a", $ImgKirlia),
    "3" => new Palpite("A x e w", $ImgAxew)
];


$PalpiteCorreto = array_rand($Pokemon);

switch ($Palpite)
{
    case "1":
        
        if ($Palpite == $PalpiteCorreto)
        {
            print "<h1>Acertou: ".$Pokemon[1]->getNome()."</h1>";
            print "<br>";
            print "<div class='centro'><img src=".$Pokemon[1]->getLink()." height='300' ></div>";
            print "<a class='Voltar' href='Index.html'>Voltar</a>";
        }
        else
        {
            print "<h1>Errou: ".$Pokemon[1]->getNome()."</h1>";
            print "<br>";
            print "<div class='centro'><img src=".$Pokemon[1]->getLink()." height='300' ></div>";
            print "<a class='Voltar' href='Index.html'>Voltar</a>";
        }
        break;
    
    case "2":
        
        if ($Palpite == $PalpiteCorreto)
        {
            print "<h1>Acertou: ".$Pokemon[2]->getNome()."</h1>";
            print "<br>";
            print "<div class='centro'><img src=".$Pokemon[2]->getLink()." height='300' ></div>";
            print "<a class='Voltar' href='Index.html'>Voltar</a>";
        }
        else
        {
            print "<h1>Errou: ".$Pokemon[2]->getNome()."</h1>";
            print "<br>";
            print "<div class='centro'><img src=".$Pokemon[2]->getLink()." height='300' ></div>";
            print "<a class='Voltar' href='Index.html'>Voltar</a>";
        }

        break;
    
    case "3":
        
        if ($Palpite == $PalpiteCorreto)
        {
            print "<h1>Acertou: ".$Pokemon[1]->getNome()."</h1>";
            print "<br>";
            print "<div class='centro'><img src=".$Pokemon[1]->getLink()." height='300' ></div>";
            print "<a class='Voltar' href='Index.html'>Voltar</a>";
        }
        else
        {
            print "<h1>Errou: ".$Pokemon[3]->getNome()."</h1>";
            print "<br>";
            print "<div class='centro'><img src=".$Pokemon[3]->getLink()." height='300' ></div>";
            print "<a class='Voltar' href='Index.html'>Voltar</a>";
        }

        break;

    default:
        
        break;
}

?>