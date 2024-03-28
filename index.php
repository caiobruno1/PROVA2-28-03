<?php
  include('php/protecao.php'); deslogado();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 col-5 bg-danger-subtle p-3 rounded-2">
        <form action="php/login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="exampleInputPassword1">
            </div>
        
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <?php if(isset($_GET['erro'])){ $open = 'open'; ?>
          
          <dialog <?= $open ?> class="bg-warning rounded-2 border-1">
            <h4>Usario ou senha inválidos!</h4>
            <a href="index.php" class="btn btn-success">Fechar</a>
          </dialog>

        <?php } if(isset($_GET['log'])){ $open = 'open'; ?>

          <dialog <?= $open ?> class="bg-warning rounded-2 border-1">
            <h4>Faça login para acessar a home!</h4>
            <a href="index.php" class="btn btn-success">Fechar</a>
          </dialog>

        <?php } ?>
<!-- Antifragil -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>