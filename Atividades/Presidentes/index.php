<?php

require_once('Modelo/Presidentes.php');

$dutra = new Presidente();
$dutra->setNumero(16);
$dutra->setNome('Eurico Gaspar Dutra');
$dutra->setInicio('1946');

$getulio = new Presidente(17, 'Getulio Vargas', 1951, 1954);
$cafe = new Presidente(18, 'Café Filho', 1955, 1955);
$carlos = new Presidente(19, 'Carlos Luz', 1955, 1955);
$nereu = new Presidente(20, 'Nereu Ramos', 1955, 1956);
$juscelino = new Presidente(17, 'Juscelino kubitschek', 1956, 1961);

$presidentes = array($dutra, $getulio, $cafe, $carlos, $nereu, $juscelino);

print 'Tabela de Presidentes';

print '<table border=1>';

print '<tr>';

print '<th>Número</th>';
print '<th>Nome</th>';
print '<th>Início</th>';
print '<th>Fim</th>';

print '</tr>';

foreach ($presidentes as $p)
{

 /*   print '<tr>';

    print '<td>' . $p->getNumero() . '</td>';
    print '<td>' . $p->getNome() . '</td>';
    print '<td>' . $p->getInicio() . '</td>';
    print '<td>' . $p->getFim() . '</td>';

    print '</tr>';*/

    print $p->getLinhaHTML();
}

print '</table>';
