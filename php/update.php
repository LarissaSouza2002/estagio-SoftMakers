<?php

if (isset($_GET['id'])) {
    include "db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM cad_animal where id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: read.php");
    }

    }else if(isset($_POST['update'])){
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
    $id = validate($_POST['id']);

    if (empty($nome)) {
        header("location: ../update.php?id=$id&error=Nome is required"); 
    } else if (empty($tipo)) {
        header("location: ../update.php?id=$id&error=Tipo is required");
    } else if (empty($idade)) {
        header("location: ../update.php?id=$id&error=Idade is required");
    } else if (empty($raca)) {
        header("location: ../update.php?id=$id&error=Raça is required");
    } else if (empty($dono)) {
        header("location: ../update.php?id=$id&error=Dono is required");
    } else if (empty($telefone)) {
        header("location: ../update.php?id=$id&error=Telefone is required");
    } else {
        $sql = "INSERT INTO `cad_animal`(`nome_animal`, `idade_animal`, `tipo_animal`, `raca_animal`, `dono_animal`, `telefone`)
            VALUES('$nome', '$idade','$tipo', '$raca', '$dono', '$telefone')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ../read.php?success=Editado Com Sucesso");
        } else {
            header("location: ../index.php?error=unknown error occurred&$user_data");
        }
    }
    }else{
    header("Location: read.php");
}