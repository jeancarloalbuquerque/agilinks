<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    if (isset($_POST)) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];

        $query = "UPDATE links SET title = '$title', description = '$description', url = '$url' WHERE id = $id";

        if ($mysqli->query($query)) {
            header('Location: ./index.php');
        }
    }
?>