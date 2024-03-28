<?php
session_start();

function logado()
{
    if (empty($_SESSION['usuario'])){
        header("Location: ../index.php?log=1");
    }
}

function deslogado()
{
    if (isset($_SESSION['usuario'])){
        header('Location: public/home.php');
    }
}

?>;