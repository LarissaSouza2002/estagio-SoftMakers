<?php include 'php/update.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="php/update.php" method="POST">

            <h4 class="display-4 text-center">Update</h4>
            <hr><br>
            <?php if (isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']?>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="nome">Nome</label><br>
                <input type="text" class="form-control" id="nome_animal" name="nome_animal"
                value="<?=$row['nome_animal'] ?>" >
            </div>
            <br>
            <div class="form-group">
                <label for="tipo">Tipo</label><br>
                <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" 
                value="<?=$row['tipo_animal'] ?>" >
            </div>
            <br>
            <div class="form-group">
                <label for="idade">Idade</label><br>
                <input type="text" class="form-control" id="idade_animal" name="idade_animal" 
                value="<?=$row['idade_animal'] ?>" >
            </div>
            <br>
            <div class="form-group">
                <label for="raca">Raça</label><br>
                <input type="text" class="form-control" id="raca_animal" name="raca_animal" 
                value="<?=$row['raca_animal'] ?>" >

            </div>
            <br>
            <div class="form-group">
                <label for="dono">Dono</label><br>
                <input type="text" class="form-control" id="dono_animal" name="dono_animal" 
                value="<?=$row['dono_animal'] ?>" >

            </div>
            <br>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" 
                value="<?=$row['telefone']?>" >
            </div>
            <input type="text" 
                    name="id"
                    value="<?=$row['id']?>"
                    hidden >
            <br>
            <button type="submit" class="btn btn-primary" name="update">Atualizar</button>
            <a href="read.php" class="link-primary">Visualizar</a>

        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>