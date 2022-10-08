<?php include "conexao.php";?>
<!doctype html>
<html lang="pt-br">
 <head>
   <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
  </head>
  <body>
   <div class="container">

     <div class="mt-4 p-5 bg-primary rounded text-center text-white">
   <h1>Guest List</h1>
</div>
  <form class="row d-flex mt-4" action="#" method="GET">
  <input type="hidden" id="id-convidado" name="id-convidado">
  <div class="col-3">
    <label for="staticEmail2">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="NOME" name = "nome">
    <label for="staticEmail2">acompanhantes</label>
    <input type="text" class="form-control" id="quantidade" placeholder="QUANTIDADE" name = "quantidade">
    <button type="submit" class="btn btn-primary mb-3">SALVA AÍ</button>
  </div>
</form>
<table class="table">
    <thead>
      <tr>
        <th>ID's</th>
        <th>NOMES</th>
        <th>QUANTIDADES</th>
        <th>DATAS</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($resultado as $convidado) : ?>
      <tr>
        <td id="id"><?php echo $convidado['cd_convidados'] ?></td>
        <td id="nome<?php echo $convidado['cd_convidados'] ?>"><?php echo $convidado['nm_convidados'] ?></td>
        <td id="acomp<?php echo $convidado['cd_convidados'] ?>"><?php echo $convidado['qtde_convidados'] ?> </td>
        <td><?php echo $convidado['data_cadastro'] ?> </td>
        <td> <button type="button" class="btn btn-success" onclick="atualizar(<?php echo $convidado['cd_convidados'] ?>)">Atualizar</button></td>
        <td> <a href="excluir.php?id=<?php echo $convidado['cd_convidados']; ?>"><button type="button" class="btn btn-danger">Apagar</button></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div> 
    <script>
        function atualizar(id){
        var nome = document.getElementById('nome'+id).innerText;
        var acompanhantes = document.getElementById("acomp"+id).innerText;
        document.getElementById("nome").setAttribute('value',nome);
        document.getElementById("quantidade").setAttribute('value',acompanhantes);
        document.getElementById("id-convidado").setAttribute('value',id);
        }
    </script>
</body>

</html>