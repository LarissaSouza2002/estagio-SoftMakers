<?php

if (isset($_POST['create'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $nome = validate($_POST['nome_animal']);
    $tipo = validate($_POST['tipo_animal']);
    $idade = validate($_POST['idade_animal']);
    $raca = validate($_POST['raca_animal']);
    $dono = validate($_POST['dono_animal']);
    $telefone = validate($_POST['telefone']);

    $user_data = 'nome=' . $nome . 'tipo=' . $tipo . 'idade=' . $idade . 'raca=' . $raca . 'dono=' . $dono . 'telefone=' . $telefone;

    if (empty($nome)) {
        header("location: ../index.php?error=Nome is required&$user_data");
    } else if (empty($tipo)) {
        header("location: ../index.php?error=Tipo is required&$user_data");
    } else if (empty($idade)) {
        header("location: ../index.php?error=Idade is required&$user_data");
    } else if (empty($raca)) {
        header("location: ../index.php?error=Raça is required&$user_data");
    } else if (empty($dono)) {
        header("location: ../index.php?error=Dono is required&$user_data");
    } else if (empty($telefone)) {
        header("location: ../index.php?error=Telefone is required&$user_data");
    } else {
        $sql = "INSERT INTO `cad_animal`(`nome_animal`, `idade_animal`, `tipo_animal`, `raca_animal`, `dono_animal`, `telefone`)
            VALUES('$nome', '$idade','$tipo', '$raca', '$dono', '$telefone')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ../read.php?success=Criado com Sucesso");
        } else {
            header("location: ../index.php?error=unknown error occurred&$user_data");
        }
    }
}
