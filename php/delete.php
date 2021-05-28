<?php

if (isset($_GET['id'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = validate($_GET['id']);

    $sql = "DELETE FROM cad_animal
            WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../read.php?success=Apagado Com Sucesso");
    } else {
        header("location: ../read.php?error=unknown error occurred&$user_data");
    }
} else {
    header("Location: ../read.php");
}
