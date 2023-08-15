<?php
include_once("connection.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="midia.css">
    <title>Nosso acervo</title>
</head>
<body>

<header class="header">
    <div class="menu">
      <h1>
        <a href="index.php"  >
            <img id="logo" src="img/logo-site.png" alt=""/>
        </a>
      </h1>
      <nav class="menu-nav">
        <ul class="header-baixo">
          <li><a href="#quem-somos">Quem somos</a></li>
          <li><a href="acervo.php">Nosso acervo</a></li>
          <li><a href="login/login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="section-one">
    <div class="intro">
      <h2>Acesse nosso acervo e tenha acesso ao livro que precisa.</h2>
      <h3>Faça parte da Biblioteca Online para trabalhar, pesquisar e estudar </h3>
      <div class="button-side">
        <button href="login/login.php">Acessar conta</button>
      </div>
    </div>
    
  </section>
    <div class="container">
        <h2 class="display-4 mt-5 mb-5">Nosso acervo de Ebooks</h2>
        <?php
        
        // Consulta SQL para buscar informações da tabela "livros" no banco de dados.
        $query_livros = "SELECT id_livro, nome_livro, preco, imagem FROM livros ORDER BY id_livro ASC";
        // Preparando a query
        $result_livros = $conn->prepare($query_livros);
        // Executando a query
        $result_livros->execute();
        // Percorrendo os resultados
    ?>



    <div class="row row-cols-1 row-cols-md-3" >   
        <?php

        while ($row_livro = $result_livros->fetch(PDO::FETCH_ASSOC)) {
            // (essa forma é mais trabalhosa e gasta mais linhas, por isso uso o ((extract))
            //echo "ID: " . $row_livro['id_livro'] . "<br>";
            extract($row_livro);
            /*echo "<img src='./imagem/$id_livro/$imagem'><br>";
            echo"ID:  $id_livro <br>";
            echo"Nome: $nome_livro <br>";
            echo"Preço:" . number_format($preco, 2, ",", "."). "<br>"; //formatação do número da forma correta
            echo "<hr>";
            <img src='<?php echo "./imagem.vitrine/$id_livro/$imagem"; ?>' class="card-img-top" alt="...">*/
            $id_livro = $row_livro['id_livro'];
            ?>
            <div class="col- mb-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nome_livro; ?></h5>
                        <p class="card-text">R$ <?php echo number_format($preco, 2, ",", "."); ?> </p>
                        <a href="detalhe-produto.php?id=<?php echo $id_livro; ?>" class="btn btn-primary">detalhes</a>
                    </div>
                </div>
            </div>




         <?php 
        }
        ?>

        
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>