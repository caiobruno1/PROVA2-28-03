<?php
include('conexao.php');

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];

$sql = "INSERT INTO tb_aluno(nome, idade, telefone, email)
                    VALUES('$nome', '$idade', '$telefone', '$email')";
try{
    $conn->exec($sql); 
    echo("Dados gravados");
    header("Location: ../public/consultar.php?cad=s");
}catch(PDOException $E){
    echo("Erro ao cadastrar".$E->getMessage());
}
// Antifragil

?>