<?php
include_once("conexao.php");
if($_POST){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];
    $sql = "INSERT INTO livros (nome_livro,preco,autor,isbn) VALUES ('$nome', '$preco', '$autor', '$isbn')";
    if ($mysql->query($sql)){
        header("Location: painel.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysql);
       ;
    }
}