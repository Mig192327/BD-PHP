<?php

$server = "localhost";
$user = "root";
$senha = "";
$db = "alunos";

$conexao = mysqli_connect($server, $user, $senha, $db);

$query = "SELECT * FROM alunos";

$consultar_alunos = mysqli_query($conexao, $query);

while( $linha = mysqli_fetch_array($consultar_alunos)){
    echo $linha['Nome'], "<br>", $linha['Idade'], "<br>";
}




?>