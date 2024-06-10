<?php

include "conexao.php";

if('POST'==$_SERVER['REQUEST_METHOD']){
    $nome = $POST['nome'];
    $sabor = $POST['sabor']
    $tamanho = $POST['tamanho']
    $quantidade = $POST['quantidade']

    $sql = ("insert into sorveteria (nome,sabor,tamanho) values ($nome, $sabor, $tamanho, $quantidade)");
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis",$nome,$sabor,$tamanho);

    if ($stmt->execute()){
        echo("Registro inserido com sucesso.");

    }
else {
    echo "Erro ao inserir registro: " . $stmt->error;
}
?>