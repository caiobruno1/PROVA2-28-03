<?php
    include('../php/protecao.php');
    include('../php/conexao.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_aluno WHERE id = '$id'";

    try{
        $resultado = $conn->query($sql);
        $campos = $resultado->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $E){
        echo "Erro ao consultar ".$E->getMessage();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php include('../componentes/menu.php'); ?>
    <div class="container">
        <form action="../php/atualizar.php" method="post">
            <input class="form-control mt-2" type="text" name="nome" value="<?= $campos['nome'] ?>" placeholder="Nome do aluno">
            <input class="form-control mt-2" type="text" name="idade" value="<?= $campos['idade'] ?>">
            <input class="form-control mt-2" type="text" name="telefone" value="<?= $campos['telefone'] ?>">
            <input class="form-control mt-2" type="text" name="email" value="<?= $campos['email'] ?>">
            
            <input type="hidden" name="id" value="<?= $campos['id'] ?>">

            <input class="btn btn-primary mt-2" type="submit" value="Alterar">
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>