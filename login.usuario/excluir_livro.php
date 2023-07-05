<?php

include_once("conexao.php");

if($_GET["id"]){
    $id_livro= $_GET["id"];

    $query = "DELETE FROM livros WHERE id_livro = $id_livro";
    $excluir = mysqli_query($mysql, $query);
    
    if($excluir) {
        echo"<script>alert('Dados Excluido')</script>";
             echo"<script>window.location.href='painel.php';</script>";

    } else {
        echo "Erro ao excluir.";
    }
} else{

    echo "Usuario Não encontrado";
}