<?php

// POST (Enviar): Os dados são enviados escondidos no corpo da requisição (body). Mais seguro para dados sensíveis e permite arquivos grandes.

print "<h1 > Parâmetros recebidos por get: </h1> <br>\n";

// 
print 'Nome:' . $_POST["nome"];

print "<br>";

print 'Idade:' . $_POST["idade"];


