<?php

$Tafarel = array('numero' => 1, 'nome' => 'Tafarel', 'cor' => "yellow");
$Jorginho = array('numero' => 2, 'nome' => 'Jorginho', 'cor' => "green");
$Aldair = array('numero' => 13, 'nome' => 'Aldair', 'cor' => "yellow");
$Marcio = array('numero' => 15, 'nome' => 'Márcio Santos', 'cor' => "green");
$Branco = array('numero' => 6, 'nome' => 'Branco', 'cor' => "yellow");
$Mauro = array('numero' => 1, 'nome' => 'Mauro Silva', 'cor' => "green");
$Dunga = array('numero' => 8, 'nome' => 'Dunga', 'cor' => "yellow");
$Mazinho = array('numero' => 17, 'nome' => 'Mazinho', 'cor' => "green");
$Zinho = array('numero' => 9, 'nome' => 'Zinho', 'cor' => "yellow");
$Romario = array('numero' => 11, 'nome' => 'Romário', 'cor' => "green");
$Bebeto = array('numero' => 7, 'nome' => 'Bebeto', 'cor' => "yellow");

$jogadores = array($Tafarel, $Jorginho, $Aldair, $Marcio, $Branco, $Mauro, $Dunga, $Mazinho, $Zinho, $Romario, $Bebeto);

print '<table border=1>';

print '<tr>';

print '<th>Número</th>';
print '<th>Nome</th>';

print '</tr>';



foreach ($jogadores as $j)
{
    print "<tr style=background-color:". $j['cor'] .">";

    print '<td>' . $j['numero'] . '</td>';
    print '<td>' . $j["nome"] . '</td>';

    print '</tr>';
}

print '</table>';
