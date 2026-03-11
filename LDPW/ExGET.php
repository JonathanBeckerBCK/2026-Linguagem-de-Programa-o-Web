<?php

// GET (Buscar): Os dados são anexados ao final da URL (?nome=valor). Fica no histórico do navegador e é ideal para compartilhar links.

print "<h1 > Parâmetros recebidos por get: </h1> <br>\n";

// é um array associativo, posições customizadas
print 'Nome:' . $_GET["nome"];

print "<br>";

print 'Idade:' . $_GET["idade"];

//Normal ->http://localhost/LDPW/ExGET.php
//Com informações -> http://localhost/LDPW/ExGET.php?nome=jony&idade=18


