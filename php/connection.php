<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja";
$porta = 3306;

try {
    $conn = new PDO("mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão com o banco de dados realizada com sucesso!<br>";
} catch (PDOException $ex) {
    die("Erro: Por favor, tente novamente. Caso o problema persista, entre em contato com o administrador.");
}
?>