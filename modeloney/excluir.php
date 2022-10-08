<?php


$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'sebrae123';
$banco = 'francisco';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
 if ($conexao->connect_error){
      echo "não foi possivel conectar";
 }
else{
    $id = $_GET['id'];
    $sqlRemover = "DELETE FROM tb_convidados WHERE cd_convidados = {$id}";
    $conexao->query($sqlRemover);
    header('Location:treinos.php');
    
}

?>