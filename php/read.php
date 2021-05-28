<?php

include "db_conn.php";

$sql = "SELECT * FROM cad_animal";
$result = mysqli_query($conn, $sql);