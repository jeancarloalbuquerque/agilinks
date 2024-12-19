<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    if (!empty($_POST)) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $collection = !empty($_POST['collection']) ? $_POST['collection'] : 'null';
        
        $query = "INSERT INTO links (title, description, url, collection_id) VALUES ('$title', '$description', '$url', $collection)";

        if ($mysqli->query($query)) {
            header('Location: ./');
        } else {
            header('Location: ./create.php');
        }

    }
?>