<?php

include "conexao.php";

if (isset($_POST['inserir'])) {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "'INSERT INTO cadastro (produto, descricao, categoria, preco, quantidade) VALUES ('{$produto}', '{$descricao}', '{$categoria}', '{$preco}','{$quantidade}')'"
    
    $result = mysqli_query($conexao, $sql);
    if($result)
        echo "inserido com sucesso";
    else 
        echo "erro ao inserir";
    mysqli_close($conexao);
}


if (isset($_POST['atualizar'])) {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "'UPDATE cadastro SET produto= $produto, descricao = $descricao, categoria=$categoria, preco=$preco, quantidade=$quantidade where produto =$produto"
    
    $result = mysqli_query($conexao, $sql);
    if($result)
        echo "inserido com sucesso";
    else 
        echo "erro ao atualizar";
    mysqli_close($conexao);
}

if (isset($_POST['excluir'])) {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "'DELETE FROM cadastro WHERE produto= $produto, descricao = $descricao, categoria=$categoria, preco=$preco, quantidade=$quantidade where produto =$produto"
    
    $result = mysqli_query($conexao, $sql);
    if($result)
        echo "excluido com sucesso";
    else 
        echo "erro ao excluir";
    mysqli_close($conexao);
}


if (isset($_POST['exibir'])) {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "'SELECT * FROM cadastro'"
    
    $result = mysqli_query($conexao, $sql);
    if($result)
        echo "inserido com sucesso";
    else 
        echo "erro ao atualizar";
    mysqli_close($conexao);
}

?>
