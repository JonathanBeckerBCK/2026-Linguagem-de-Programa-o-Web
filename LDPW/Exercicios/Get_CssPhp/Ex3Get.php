<?php


if (isset($_GET['cor1']) && $_GET['cor1'] != '')
{
    $cor1= $_GET['cor1'];    
    print "<h1 style='color:". $cor1 ."'> Teste de Cor: </h1>";
}
else
{
    print "Envie o parametro" . $_GET['cor1'];
}
//------------------------------------------------------------------------------

if (isset($_GET['cor2']) && $_GET['cor2'] != '') {
    $cor2= $_GET['cor2'];
    print "<body style='background-color: ". $cor2 ."';></body>";
}
else
{
    print "Envie o parametro" . $_GET['cor2'];
}






//http://localhost/LDPW/Exercicios/Get_CssPhp/Ex3Get.php?cor1=black&cor2=red