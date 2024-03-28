<?php
include('../php/protecao.php');
include('../php/conexao.php');

$sql = "SELECT * FROM tb_aluno ORDER BY nome";

try{
    $resultado = $conn->query($sql);
}catch(PDOException $E){
    echo "Erro ao consultar ".$E->getMessage();
}

$i = 1;

if(isset($_GET['cad'])){
  echo "<script>alert('Dados cadastrados');</script>";
}
if(isset($_GET['con'])){
  echo "<script>alert('Dados alterados');</script>";
}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('../componentes/menu.php'); ?>
    <div class="container">
    <table class="table table-striped">
        <tr>
            <th>Ide</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
        <?php foreach($resultado as $valor){?>
        <tr>
            <td><?= $valor['id'] ?></td>
            <td><?= $valor['nome'] ?></td>
            <td><?= $valor['idade'] ?></td>
            <td><?= $valor['telefone'] ?></td>
            <td><?= $valor['email'] ?></td>
            <td>
                <a class="btn btn-warning" href="alterar.php?id=<?= $valor['id'] ?>">Alterar</a>               
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $valor['id'] ?>">
                  Deletar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $valor['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja realmente deletar?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Apagando <?= $valor['nome'] ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a class="btn btn-danger" href="../php/deletar.php?id=<?= $valor['id'] ?>">Deletar</a>
                      </div>
                    </div>
                  </div>
                </div>                
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>