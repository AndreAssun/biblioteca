<?php 

include_once("conexao.php");

$id = $_POST ["id_livro"];
$nome = $_POST ["nome_livro"];
$preco = $_POST ["preco"];
$autor = $_POST ["autor"];
$isbn = $_POST ["isbn"];

$query = "UPDATE livros SET nome_livro = '$nome', preco = '$preco', autor = '$autor', isbn = '$isbn'
                               
                               
         WHERE id_livro = $id";

         $atualizar = mysqli_query($mysql, $query);

         if($atualizar) {
             echo"<script>alert('Dados Atualizados')</script>";
             echo"<script>window.location.href='painel.php';</script>";
         } else{
             echo"Erro ao atualizar os dados
             <a href='editar_livro.php?id=$id'>Voltar</a>";
             
         }