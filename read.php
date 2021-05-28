<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>

  <head>
      <meta charset="UTF-8">
      <title>SoftMakers</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
          <div class="box">
          <h4 class="display-4 text-center">Read</h4><br>
          <?php if (isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
      </div>             
      <?php } ?>
          <?php if (mysqli_num_rows($result)) { ?> 
          <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col">Idade</th>
            <th scope="col">Raça</th>
            <th scope="col">Dono</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        while($rows = mysqli_fetch_assoc($result)){
          $i++;  
        ?>
          <tr>
            <th scope="row"><?=$i?></th>
            <td><?=$rows['nome_animal']?></td>
            <td><?= $rows['tipo_animal']?></td>
            <td><?=$rows['idade_animal']." anos" ?></td>
            <td><?=$rows['raca_animal']?></td>
            <td><?=$rows['dono_animal']?></td>
            <td><?=$rows['telefone']?></td>
            <td><a href="update.php?id=<?=$rows['id']?>"
                  class="btn btn-success">Editar</a>

                  <a href="php/delete.php?id=<?=$rows['id']?>"
                  class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php }?>           
        </tbody>
        <?php }?>           
      </table>
      <div class="link-right">
        <a href="index.php" class="btn btn-primary">Criar</a>
      </div>              
    </div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>