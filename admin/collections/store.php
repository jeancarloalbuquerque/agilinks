<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (!empty($_POST)) {
        $name = $_POST['name'];

        $query = "INSERT INTO collections (name) VALUES ('$name')";

        if ($mysqli->query($query)) {
            header('Location: ./index.php');
        }
    }
?>
