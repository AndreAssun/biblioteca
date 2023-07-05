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
    <a>Painel usuario - eBooks cadastrados no sistema</a>
    

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
      <td><?php echo $dado['autor']?></td>
      <td><?php echo $dado['isbn']?></td>
      <td>
      <div class="teste">
          <a href="editar_livro.php?id=<?=$id_livro['id_livro']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>
          </a>
          
      </div>



       
       
 
      </td>




    </tr>
    <?php } ?>
  </tbody>
</table>






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