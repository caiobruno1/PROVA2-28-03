<?php
  include('../php/protecao.php');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<body>
<?php include('../componentes/menu.php'); ?>

    <div class="container col-4 mt-4">
      <form action="../php/inserir.php" method="get">
          <input class="form-control mt-1" type="text" name="nome" placeholder="Nome da aluno">
          <input class="form-control mt-1" type="number" maxlength="3" name="idade" placeholder="Idade do aluno">
          <input class="form-control mt-1" type="text" name="telefone" placeholder="Telefone">
          <input class="form-control mt-1" type="text" name="email" placeholder="E-mail">

          <input type="submit" class="btn btn-success mt-2" value="Cadastrar">
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>