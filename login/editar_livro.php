<?php include_once("conexao.php"); @$id= $_GET["id"];?>
<?php include 'protegido.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
   
    <title>Editar Livro</title>

    <h1>Editar Livro</h1>

    
</head>
<body>
<?php 
        $query ="SELECT nome_livro, preco, autor, isbn FROM livros WHERE id_livro = $id";
       // $usuario = mysqli_query($mysql, $query);
       // $dados_usuario = mysqli_fetch_all($usuario, MYSQLI_ASSOC);

        
        $con = $mysql->query( $query) or die($mysql->error);
     ?>
     <?php  while ($dado = $con->fetch_array()) { ?>



    <div>
      <form action="atualizar_livro.php" method="POST" class="table ">
          <input type="hidden" name="id_livro" value="<?=$id?>" scope="col">
          <label for="">Titulo
          <input type="text" name="nome_livro" value="<?=$dado["nome_livro"]?>" scope="col">
          </label>
          <label for="">Preço
          <input type="text" name="preco" value="<?=$dado["preco"]?>" scope="col">
          </label>
          <label for="">Autor
          <input type="text" name="autor" value="<?=$dado["autor"]?>" scope="col">
          </label>
          <label for="">ISBN
          <input type="text" name="isbn" value="<?=$dado["isbn"]?>" scope="col">
          </label>
      
      
          <input type="submit" value="ATUALIZAR" class="btn btn-primary">
      </form>
    </div>
<?php
     }  
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script> 
</body>


<style>

  h1{
    text-align:center;
  }

  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: rgb(65, 127, 243);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgb(65, 127, 143);
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  

  

</style>


</html>
