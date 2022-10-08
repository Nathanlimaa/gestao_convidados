<?php


$servidor = '127.0.0.1:3306';
$usuario = 'root';
$senha = 'sebrae123';
$banco = 'francisco';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
 if ($conexao->connect_error){
      echo "não foi possivel conectar";
}else {
    echo "conectado com sucesso!";
}
?>