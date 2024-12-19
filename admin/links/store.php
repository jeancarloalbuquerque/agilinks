<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    if (!empty($_POST)) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];

        $query = "INSERT INTO links (title, description, url)
        VALUES ('$title', '$description', '$url')";

        if ($mysqli->query($query)) {
            header('Location: ./');
        } else {
            header('Location: ./create.php');
        }

    }
?>