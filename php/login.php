<?php
    include('conexao.php');
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM tb_usuario WHERE emailUsuario = '$usuario' and senha = '$senha'";

    try{
        $login = $conn->query($sql);
        $linhas = $login->rowCount();
        if($linhas > 0){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("location: ../public/home.php");
        }else{
            header("Location: ../index.php?erro=1");
        }
    }catch(PDOException $E){
        echo "Erro ao logar ".$E->getMessage();
    }


?>;