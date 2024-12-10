<?php
    $mysqli = new mysqli('localhost', 'root', '', 'agilinks');

    mysqli_query($mysqli, "SET NAMES 'utf8'") or die("Erro na SQL" . mysqli_error($mysqli));
    mysqli_query($mysqli, 'SET character_set_connection=utf8') or die("Erro na SQL" . mysqli_error($mysqli));
    mysqli_query($mysqli, 'SET character_set_client=utf8') or die("Erro na SQL" . mysqli_error($mysqli));
    mysqli_query($mysqli, 'SET character_set_results=utf8') or die("Erro na SQL" . mysqli_error($conexao));
?>