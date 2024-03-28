<?php

function executar($sql){
    include('conexao.php');
    try{
        $conn->exec($sql);
    }catch(PDOException $E){
        echo "Erro ao executar o sql ".$E->getMessage();
    }

}
?>;