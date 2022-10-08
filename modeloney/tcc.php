<?php


$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'shoes_tcc';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
if (isset($_GET['nome'])) {
 if ($conexao->connect_error)
      echo "não foi possivel conectar";
else {
    //echo "conectatdo com sucesso!";
    $date = date('Y-m-d');
    //echo $date;
    $sqlgravar = "INSERT INTO tb_convidados(nm_convidados,qtde_convidados,data_cadastro)VALUES('$_GET[nome]',$_GET[quantidade],'$date')";
    $conexao -> query($sqlgravar);

    $resultado = $conexao->query("SELECT * FROM tb_convidados");
   }
}else{
    $resultado = $conexao ->query("SELECT * FROM tb_convidados");
}

?>