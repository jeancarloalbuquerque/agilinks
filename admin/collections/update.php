<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    if (isset($_POST)) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $query = "UPDATE collections SET name = '$name' WHERE id = $id";

        if ($mysqli->query($query)) {
            header('Location: ./index.php');
        }
    }
?>