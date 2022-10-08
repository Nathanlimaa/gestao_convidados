<?php


$servidor = '127.0.0.1:3306';
$usuario = 'root';
$senha = 'sebrae123';
$banco = 'francisco';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
if (isset($_GET['nome'])) {
 if ($conexao->connect_error){
      echo "não foi possivel conectar";
}else if(isset($_GET['id-convidado']) && ($_GET['id-convidado'] != "" ) ){
        $id = $_GET['id-convidado'];

        $sqlpdade = "UPDATE tb_convidados SET nm_convidados='$_GET[nome]', qtde_convidados=$_GET[quantidade] WHERE cd_convidados='$id'";
        $conexao->query($sqlpdade);
        $resultado = $conexao ->query("SELECT * FROM tb_convidados");
}else {
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