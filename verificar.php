<?php

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql = "SELECT FROM usuarios WHERE login ={$login} 
OR email='{$login}' AND senha='{senha}'";

$result = mysqli_query($con, $s1l);

if(mysqli_num_rows($result)--1){
    echo "Logado";
}

?>