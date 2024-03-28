<?php
$servidor = "localhost";
$banco = "crudcompleto";
$usuario = "root";
$senha = "";
$cdn = "";

try{
    $conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);
    // echo "conectou";
}catch(PDOException $E){
    echo "Erro de conexao ".$E->getMessage();
}
// Antifragil
?>