<?php
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "UPDATE tb_aluno SET nome = '$nome', idade = '$idade',
        telefone = '$telefone', email='$email' WHERE id = '$id'";
try{
    $conn->exec($sql);
    header("Location: ../public/consultar.php?con=s");
}catch(PDOException $E){
    echo "Erro ao atualizar ".$E->getMessage();
}
?>