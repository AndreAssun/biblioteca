<?php include 'protegido.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
    <link rel="stylesheet" href="style.css">
    <title>Painel</title>
  <style>
    html{
      font-family
        
      

    }
  </style>
</head>
<body>

<nav>
  <div class="menu">
  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" color="blue" class="bi bi-dot" viewBox="0 0 16 16">
      <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
      </svg>
    <a>Painel administrativo - eBooks cadastrados no sistema</a>
    

      <div class="menu-esquerdo">
      
        <p><?php echo $_SESSION['nome_login']?></p>
        <div class="icon">
          <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" color="blue"class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </div>
        <button><a href="logout.php">Sair</a></button>
      </div>

      <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button> -->

  </div>
</nav>


<table class="tabela">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Autor</th>
      <th>ISBN</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  include_once("conexao.php");
     $consulta = "SELECT * FROM livros";
     $con = $mysql->query($consulta) or die($mysqli->error);
     $id = 0;
  ?>
  <?php  while ($dado = $con->fetch_array()) { ?>
    <tr>
      <th><?php echo $dado['id_livro']?></th>
      <td><?php echo $dado['nome_livro']?></td>
      <td><?php echo $dado['preco']?></td>
      <td><?php echo $dado['autor']?></td>
      <td><?php echo $dado['isbn']?></td>
      <td>
      <div class="teste">
          <a href="editar_livro.php?id=<?=$dado['id_livro']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
          </svg>
          </a>
          <p  data-bs-toggle="modal" data-bs-target="#exampleModal<?= $dado['id_livro']?>" >
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
         <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
         <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
         </svg></p>
      </div>



       
       
       <!-- Modal -->

<div class="modal fade" id="exampleModal<?= $dado['id_livro']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Deseja excluir <?= $dado['nome_livro']?>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <a  href="excluir_livro.php?id=<?= $dado['id_livro']?>" type="button" class="btn btn-primary'">Excluir</a>
      </div>
    </div>
  </div>
</div>
      </td>




    </tr>
    <?php } ?>
  </tbody>
</table>


<!-- Button trigger modal -->
<button class="butao-cadastro"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="botao-usuario">
  Cadastrar novo livro <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
</svg>
</button>
<div class="teste1">
    <button href="" class="butao-cadastro"><a href="cadastro_usuario.php" class="button-novo-adm">Cadastrar administrador</a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
</svg></button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de novo livro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="inser_livro.php" class="mb-3 estrutura" method="POST">
        <div>
        <label for="#" class="form-label">Nome:</label>
        <input type="text"  class="form-control" name="nome" >
    </div>
    <div>
        <label for="#" class="form-label">Preço:</label>
        <input type="text"  class="form-control" name="preco" >
    </div>
    <div>
        <label for="" class="form-label">Autor</label>
        <input type="text" class="form-control" name="autor">
    </div>
    <div>
        <label for="" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn">
    </div>

<div>
    <input type="submit" placeholder=Enviar class="btn btn-primary p-6 mt-2">
</div>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        
      </div>
    </div>
  </div>
</div>

<main>

<style>
  .icon{
    margin-left: 15px;
    margin-right: 15px;
  }

  
  .teste1 a{
    color:white;
    text-decoration: none;
    
  }
 

</style>


    



</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script> 


</body>
</html>