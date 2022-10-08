<?php

$servidor = '127.0.0.1:3360';
$usuario = 'root';
$senha = 'sebrae123';
$banco = 'aulacx';

$myqli = new mysqli($servidor,$usuario, $senha, $banco);
if ($myqli->connect_errno) {
     echo "falha ao conectar: (" , $myqli->connect_errno , ") " , $myqli->connect_errno;
}

?>