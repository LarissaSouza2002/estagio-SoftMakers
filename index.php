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
        <form action="php/create.php" method="POST">

            <h4 class="display-4 text-center">Cadastro de Animais</h4>
            <hr><br>
    
            <div class="form-group">
                <label for="nome">Nome</label><br>
                <input type="text" class="form-control" id="nome_animal" name="nome_animal"
                value="<?php if(isset($_GET['nome_animal']))
                                echo($_GET['nome_animal']);?>"
                placeholder="Nome do Animal" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <label for="tipo">Tipo</label><br>
                <input type="text" class="form-control" id="tipo_animal" name="tipo_animal" 
                value="<?php if(isset($_GET['tipo_animal']))
                                echo($_GET['tipo_animal']);?>"
                placeholder="Tipo de Animal" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <label for="idade">Idade</label><br>
                <input type="text" class="form-control" id="idade_animal" name="idade_animal" 
                value="<?php if(isset($_GET['idade_animal']))
                                echo($_GET['idade_animal']);?>"
                placeholder="Idade do Animal" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <label for="raca">Raça</label><br>
                <input type="text" class="form-control" id="raca_animal" name="raca_animal" 
                value="<?php if(isset($_GET['raca_animal']))
                                echo($_GET['raca_animal']);?>"
                placeholder="Raça do Animal " autocomplete="off" required>

            </div>
            <br>
            <div class="form-group">
                <label for="dono">Dono</label><br>
                <input type="text" class="form-control" id="dono_animal" name="dono_animal" 
                value="<?php if(isset($_GET['dono_animal']))
                                echo($_GET['dono_animal']);?>"
                placeholder="Dono do Animal" autocomplete="off" required>

            </div>
            <br>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" 
                value="<?php if(isset($_GET['telefone']))
                                echo($_GET['telefone']);?>"
                placeholder="Telefone" autocomplete="off" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="create">Salvar</button>
            <a href="read.php" class="link-primary">Visualizar</a>

        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>